<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', [
            'contact' => Contact::first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'whatsapp' => 'required'
        ]);

        Contact::where('id', $id)->update($validatedData);

        return redirect('/contact')->withStatus('Successfully edited contact information.');
    }
}
