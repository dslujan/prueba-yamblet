@extends('templates.head')

@section('title') Peliculas Starwars @endsection

@section('table')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Modelo</th>
                <th scope="col">Manufactor</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($starship as $key=>$data)
            <tr>
                <th scope="row"> {{$data['id']}}</th>
                <td id="name{{$data['id']}}">{{$data['name']}}</td>
                <td id="model{{$data['id']}}">{{$data['model']}}</td>
                <td id="manu{{$data['id']}}">{{$data['manufacturer']}}</td>
                <td>
                    <button type="button" class="btn btn-warning edit" id="{{'button'.$data['id']}}"  value="{{$data['id']}}">Editar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('templates.ModalStarship')

@extends('templates.footer')