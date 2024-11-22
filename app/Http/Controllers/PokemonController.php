<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Trainer;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        $trainers = Trainer::all();
        return view('pokemons.index', compact(['pokemons', 'trainers']));
    }
    
    public function create()
    {
        $trainers = Trainer::all();
        return view('pokemons.create',compact('trainers'));
    }
    
    public function store(Request $request)
    {
        $image = $request->file('image')->store('images', 'public');
        Pokemon::create($request->all());
        return redirect('pokemons')->with('success', 'Product created successfully.');
    }
    
    public function edit($id)
    {   
        $trainers = Trainer::all();
        $pokemons = Pokemon::findOrFail($id);
        return view('pokemons.edit',compact(['pokemons', 'trainers']));
    }
    
    public function update(Request $request, $id)
    {
        $image = $request->file('image')->store('images', 'public');
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
