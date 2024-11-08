<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('pokemons', [PokemonController::class, 'index']);
Route::get('pokemons/create', [PokemonController::class, 'create']);
Route::post('pokemons', [PokemonController::class, 'store']);
Route::get('pokemons/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemons/{id}', [PokemonController::class, 'update']);
Route::delete('pokemons/{id}', [PokemonController::class, 'destroy']);