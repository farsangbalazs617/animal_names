<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Novel;

class BookController extends Controller
{
    public function index()
    {
        $novels = Novel::with("animals")->get();
        
        return view('books', ['novels' => $novels]);

    }
}
