<?php

namespace App\Http\Controllers;

use App\starship;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function postForm($id , Request $request){
        $starship = new starship;
        $data = $request->all();
        $starship->id_api = $id;
        $starship->name = $request->input('name');
        $starship->model = $request->input('model');
        $starship->manufacturer = $request->input('manufacturer');
        $consulta = \DB::table('starships')->select('*')->where('id_api', $starship->id_api)->get();
        //$consulta = starship::select('select * from starhips where id_api = '.$starship->id_api);
        if(count($consulta) == 0){
            $starship->save();
        }else{
            print_r('update starships set id_api = '.$starship->id_api.', name = "'.$starship->name.'", model = "'.$starship->model.'", manufacturer = "'.$starship->manufacturer.'" where id_api =' . $starship->id_api);
            $update = \DB::update('update starships set id_api = '.$starship->id_api.', name = "'.$starship->name.'", model = "'.$starship->model.'", manufacturer = "'.$starship->manufacturer.'" where id_api =' . $starship->id_api);
            var_dump($update);
        }

        //$starship->save();
        //return $starship;
	}
}
