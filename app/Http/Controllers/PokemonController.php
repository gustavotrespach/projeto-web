<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }
    
    public function create()
    {
        return view('pokemons.create');
    }
    
    public function store(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemons')->with('success', 'Product created successfully.');
    }
    
    public function edit($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemons'));
    }
    
    public function update(Request $request, $id)
    {
        $pokemons = Pokemon::findOrFail($id);
        $pokemons->update($request->all());
        return redirect('pokemons')->with('success', 'Product updated successfully.');
    }
    
    public function destroy($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        $pokemons->delete();
        return redirect('pokemons')->with('success', 'Product deleted successfully.');
    }
}
