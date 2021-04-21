@extends('maestra')

@section('contenido')
    <h1>{{$pag->nombre}}</h1>
    {!!  $pag->contenido  !!}
@endsection
