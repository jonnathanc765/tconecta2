<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|string',
            'phone'     => 'required|min:5',
            'city'      => 'required|min:5'
        ]);

        // Correo para el cliente

        $to_name    = $data['name'];
        $to_email   = $data['email'];
        $emailData  = $data;
            
        Mail::send('emails.client', $emailData, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Contacto T-Conecta');

            $message->from('info@tconecta.com','Contacto T-Conecta');
        });

        // Correo para tconecta

        $to_name    = $data['name'];
        $to_email   = $data['email'];
        $emailData  = $data;
            
        Mail::send('emails.provider', $emailData, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Contacto T-Conecta');

            $message->from('info@tconecta.com','Contacto T-Conecta');
        });

        
        Contact::create($data);
    
        return view('contacts.success', compact('contact'));
    }
}