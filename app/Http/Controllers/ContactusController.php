<?php

namespace App\Http\Controllers;

use App\Models\contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        contactus::create($validatedData);

        return redirect()->route('Frontend.contact')->with('success', 'Your message has been submitted successfully!');
    }

    
    public function view()
    {
        return view('Frontend.contact');
    }

    
    public function store(Request $request)
    {
        //
    }

 
    public function show(contactus $contactus)
    {
        //
    }

    
    public function edit(contactus $contactus)
    {
        //
    }

    
    public function update(Request $request, contactus $contactus)
    {
        //
    }

    
    public function destroy(contactus $contactus)
    {
        //
    }
}
