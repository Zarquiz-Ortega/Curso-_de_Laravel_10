@extends('layout.plantilla')

@section('title', 'Home | pets')

@section('content')
    <h1 class="text-center text-2xl">Bienvenido a la pagina de Mascotas</h1>
    <a href=" {{route('pets.create')}} "> Añadir una mascota </a>
    <hr><br>
    <ul class="container" >
        @foreach ($pets as $pet )
            <ul>
                <a href="{{route('pets.show', $pet->id)}}">{{$pet->name}}</a>
            </ul>
        @endforeach
    </ul>
    {{$pets->links()}}
@endsection