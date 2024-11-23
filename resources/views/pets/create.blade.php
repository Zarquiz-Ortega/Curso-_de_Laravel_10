@extends('layout.plantilla')

@section('title', 'Home | Adoptar')

@section('content')
    <h1 class="text-center text-2xl">Aqui podras adoptar una nueva mascota</h1>
    <a href="{{ route('pets.index') }}">Volver atras</a>

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <label>
            Color:
            <br>
            <input type="text" name="color" value="{{ old('color') }}">
        </label>
        @error('color')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <label>
            Age:
            <br>
            <input type="number" name="age" value="{{ old('age') }}">
        </label>
        @error('age')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <label>
            Address:
            <br>
            <textarea name="address" rows="5"> {{ old('address') }} </textarea>
        </label>
        @error('address')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br><br>
        <button type="submit">Enviar</button>
    </form>

@endsection
