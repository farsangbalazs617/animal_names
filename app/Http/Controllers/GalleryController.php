<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {

        $path = public_path('images\uploaded');
        $images = File::files($path);

        return view('gallery', ['images' => $images]);
    }

    public function store(Request $request)
    {

        $destinationPath = public_path('images\uploaded');
        $file = $request->file('image'); // will get all files
        
        $file_name = $file->getClientOriginalName(); //Get file original name
        $file->move($destinationPath, $file_name); // move files to destination folder

        return $this->index();
    }
}
