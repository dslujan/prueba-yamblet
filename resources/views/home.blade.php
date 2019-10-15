@extends('templates.head')

@section('title') Peliculas Starwars @endsection

@section('table')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Peliculas</th>
                <th scope="col">Naves</th>
            </tr>
        </thead>
        <tbody>
            @foreach($titles as $key=>$data)
            <tr>
                <th scope="row">{{$data['episode_id']}}</th>
                <td>{{$data['title']}}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="{{url('/spaceships/'.$data['episode_id'])}}">Naves</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('templates.footer')

