<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.contacts', [
            'contacts' => $contacts
        ]);
    }

    public function show($slug)
    {
        $contact = Contact::where('slug', $slug)->first();

        return view('contacts.contact', [
            'contact' => $contact
        ]);
    }
}
