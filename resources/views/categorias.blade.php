@extends('maestra')

@section('contenido')
    <ul>
        @foreach($peliculas as $peli)
            <li><a href="{{$cat->nombreseo}}/{{$peli->nombreseo}}">{{$peli->nombre}}</a></li>
        @endforeach
    </ul>
@endsection
