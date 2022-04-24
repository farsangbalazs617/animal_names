<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all()->sortBy('created_at')->sortDesc();
        return view('contact_list', ['contacts' => $contacts]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'message' => 'required',
        ]);

        Contact::create($request->toArray());

        return Redirect::back()->withErrors(['status' => '1']);
    }
}
