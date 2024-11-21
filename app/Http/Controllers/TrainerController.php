<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainer = Trainer::all();
        return view('trainers.index', compact('trainer'));
    }
    
    public function create()
    {
        return view('trainers.create');
    }
    
    public function store(Request $request)
    {
        Trainer::create($request->all());
        return redirect('pokemons')->with('success', 'Product created successfully.');
    }
    
    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainers.edit', compact('trainer'));
    }
    
    public function update(Request $request, $id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->update($request->all());
        return redirect('pokemons')->with('success', 'Product updated successfully.');
    }
    
    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();
        return redirect('pokemons')->with('success', 'Product deleted successfully.');
    }
}
