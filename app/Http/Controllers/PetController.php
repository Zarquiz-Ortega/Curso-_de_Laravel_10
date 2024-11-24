<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Pet;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pets = Pet::orderBy('id', 'desc')->paginate();

        return  view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurso $request)
    {

        $pet = Pet::create($request->all());

        return redirect()->route('pets.show', $pet);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {

        $request->validate([
            'name' => ['required', 'min:3'],
            'color' => 'required',
            'age' => 'required',
            'address' => 'required',
        ]);

        $pet->update($request->all());

        return view('pets.show', compact('pet'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index',);
    }
}
