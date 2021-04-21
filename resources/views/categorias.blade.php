@extends('maestra')

@section('contenido')
    <h1>{{$cat->nombre}}</h1>
    <ul>
        @foreach($peliculas as $peli)
            <li><a href="{{$cat->nombreseo}}/{{$peli->nombreseo}}">{{$peli->nombre}}</a></li>
        @endforeach
    </ul>
@endsection
