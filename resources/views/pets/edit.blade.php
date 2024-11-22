@extends('layout.plantilla')

@section('title', 'Home | Editar')

@section('content')
    <h1 class="text-center text-2xl">Editar reguistro</h1>

    <form action="{{route('pets.update', $pet)}}" method="POST" >
        @method('PUT')
        @csrf
        <label>
            Name: <hr>
            <input type="text" name="name" value="{{$pet->name}}" >
        </label>
        <hr>
        <label>
            Color: <hr>
            <input type="text" name="color" value="{{$pet->color}}" >
        </label>
        <hr>
        <label>
            Age: <hr>
            <input type="number" name="age" value="{{$pet->age}}" >
        </label>
        <hr>
        <label>
            Address: <hr>
            <textarea name="address" rows="5">{{$pet->address}}</textarea>
        </label>
        <hr>
        <button type="submit">Actualizar</button>
    </form>

@endsection