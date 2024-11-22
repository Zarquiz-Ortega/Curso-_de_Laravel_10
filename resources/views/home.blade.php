@extends('layout.plantilla')

@section('title','Home')

@section('content')
    <h1 class="text-center text-2xl" >Pagina principal</h1>
    <a href=" {{route('pets.index')}} ">Visitar a las mascotas</a>
@endsection