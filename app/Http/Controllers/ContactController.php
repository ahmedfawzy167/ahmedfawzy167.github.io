<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request, Contact $contact)
    {
        $validatedData = $request->validated();
        $contact->create($validatedData);
        return redirect('/')->with('success', 'Contact Sent Successfully!');
    }
}
