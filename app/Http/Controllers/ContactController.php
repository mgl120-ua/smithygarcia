<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact');
    }

    public function processContact(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ], [
            'phone.numeric' => 'El número de teléfono debe ser un número válido',//REVISAAAAR
        ]);
    
        $data = $request->all();
    
        // Envía el correo
        Mail::to('martagrimaldoslopez@gmail.com')->send(new ContactFormMail($data));
    
        return redirect('/contact')->with('status', 'Mensaje enviado exitosamente');
    }
    
    
}
