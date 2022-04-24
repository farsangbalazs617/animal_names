<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function store(Request $request)
    {
        $novel = Novel::find($request->novelID);

        $validated = $request->validate([
            'animalName' => 'required|max:255',
            'animalSpecies' => 'required',
        ]);

        $novel->animals()->create([
            'aname' => $validated['animalName'],
            'species' => $validated['animalSpecies'],
        ]);

        return back();

    }
}
