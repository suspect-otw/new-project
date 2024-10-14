<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index()
    {
        return view('iletisim');
    }
    public function submit(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Process the form submission (e.g., send an email, save to database, etc.)
    // For now, we'll just redirect back with a success message
        return redirect()->route('iletisim')->with('success', 'Mesajınız başarıyla gönderildi. Teşekkür ederiz!');
    }
}