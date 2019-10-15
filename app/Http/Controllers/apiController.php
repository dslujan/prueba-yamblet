<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class apiController extends Controller
{
	public function getApi($url = null, $num = null){
		if(!$url) $url = 'https://swapi.co/api/films/';
		$client = new Client();
		$response = $client->request('GET', $url.''.$num);
		$statusCode = $response->getStatusCode();
		$body = $response->getBody()->getContents();
		$decode = json_decode($body, true);
		return $decode;
	}

    public function getAllFilms(){
		$titles = [];
        $films = $this->getApi();
		//var_dump($films['results']);
		for($i =0; $films['count']>$i; $i++){
			$index = $films['results'][$i]['episode_id'];
			$titles[$index]['episode_id'] = $index;
			$titles[$index]['title'] = $films['results'][$i]['title'];
		}
		sort($titles);
		return view('home', ['titles' => $titles]);
	}
	
	public function getSpaceships($cap){
		$starship = [];
		$info = [];
		$allinfo = [];
		$films = $this->getApi(null, $cap);
		foreach($films['starships'] as $key => $data){
			$allinfo[$key] = $this->getApi($data);
			$a = -4;
			do{
				$index = substr($allinfo[$key]['url'], $a,-1);
				$a++;
			}while(!is_numeric($index));
			$info[$index]['id'] = $index;
			$info[$index]['name'] = $allinfo[$key]['name'];
			$info[$index]['model'] = $allinfo[$key]['model'];
			$info[$index]['manufacturer'] = $allinfo[$key]['manufacturer'];
		}

		return view('startships', ['starship' => $info]);
	}

}
