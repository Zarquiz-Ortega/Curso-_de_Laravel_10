@extends('layout.plantilla')

@section('title', 'Pets |' . $pet->name)

@section('content')
    <h1 class="text-center text-2xl"> {{$pet->name}} </h1>
    <table>
        <thead>
            <td>
                <a class="text-center" href="{{route('pets.index')}}"> Volver atras </a>
            </td>
            <td>&nbsp;</td>
            <td>
                <a class="text-center" href="{{route('pets.edit', $pet)}}"> Editar reguistro </a>
            </td>
        </thead>
    </table>
    <hr><br>
    <p>
        <strong>Color: </strong> {{$pet->color}} <br>
        <strong>Age: </strong> {{$pet->age}} <br>
        <strong>Address: </strong> {{$pet->address}} <br>
    </p>

@endsection