<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);


Route::get('pets', [PetController::class, 'index'])->name('pets.index');

Route::get('pets/create', [PetController::class, 'create'])->name('pets.create');

Route::post('pets', [PetController::class, 'store'])->name('pets.store');

Route::get('pets/{pet}', [PetController::class, 'show'])->name('pets.show');

Route::get('pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');

Route::put('pets/{pet}/',[PetController::class, 'update'])->name('pets.update');

