<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact_list', ['contacts' => $contacts]);
    }

    public function store(Request $request)
    {
        Contact::create($request->toArray());
        return view('contact', ['status' => 1]);
    }
}
