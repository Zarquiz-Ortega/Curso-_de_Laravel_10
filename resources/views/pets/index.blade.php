@extends('layout.plantilla')

@section('title', 'Home | pets')

@section('content')
    <h1 class="text-center text-2xl">Bienvenido a la pagina de Mascotas</h1>
    <a href=" {{ route('pets.create') }} "> Añadir una mascota </a>
    <hr><br>
    <ul class="flex flex-wrap m-2 p-2 justifi-center item-center">
        @foreach ($pets as $pet)
        <a href="{{ route('pets.show', $pet->id) }}" class="max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <h2 class="text-lg font-bold text-gray-800">{{ $pet->name }}</h2>
                <p class="text-gray-600 text-sm mt-2">
                    {{$pet->address}}
                </p>    
            </div>
        </a>
        @endforeach
    </ul>

    
    {{ $pets->links() }}
@endsection
