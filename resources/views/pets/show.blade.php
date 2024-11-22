@extends('layout.plantilla')

@section('title', 'Pets |' . $pet->name)

@section('content')
    <h1 class="text-center text-2xl"> {{$pet->name}} </h1>
    <a class="text-center" href="{{route('pets.index')}}"> volver atras </a>
    <hr>
    <a class="text-center" href="{{route('pets.edit', $pet)}}"> Editar reguistro </a>
    <hr><br>
    <p>
        <strong>Color: </strong> {{$pet->color}} <br>
        <strong>Age: </strong> {{$pet->age}} <br>
        <strong>Address: </strong> {{$pet->address}} <br>
    </p>

@endsection