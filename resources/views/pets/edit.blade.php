@extends('layout.plantilla')

@section('title', 'Home | Editar')

@section('content')
    <h1 class="text-center text-2xl">Editar reguistro</h1>
    <a href="{{route('pets.show', $pet->id)}}">Volver atras</a>
    <hr><br>
    <form action="{{ route('pets.update', $pet) }}" method="POST">
        @method('PUT')
        @csrf
        <label>
            Name: <br>
            <input type="text" name="name" value="{{ old('name', $pet->name) }}">
        </label>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
        @enderror
        <br>
        <label>
            Color: <br>
            <input type="text" name="color" value="{{ old('color', $pet->color) }}">
        </label>
        @error('color')
            <br>
            <span>*{{ $message }}</span>
        @enderror
        <br>
        <label>
            Age: <br>
            <input type="number" name="age" value="{{ old('age', $pet->age) }}">
        </label>
        @error('age')
            <br>
            <span>*{{ $message }}</span>
        @enderror
        <br>
        <label>
            Address: <br>
            <textarea name="address" rows="5">{{ old('address', $pet->address) }}</textarea>
        </label>
        @error('address')
            <br>
            <span>*{{ $message }}</span>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>

@endsection
