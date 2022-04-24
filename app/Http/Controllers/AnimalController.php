<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function store(Request $request)
    {
        $novel = Novel::find($request->novelID);

        $novel->animals()->create([
            'aname' => $request->animalName,
            'species' => $request->animalSpecies,
        ]);

        return back();

    }
}
