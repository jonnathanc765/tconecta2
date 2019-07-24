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

        try {
            
            Mail::send('emails.client', $emailData, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                        ->subject('Contacto Tconecta');
    
                $message->from('shopify765@gmail.com', 'Contacto Tconecta');
            });

        } catch (Exception $error) {
            return view('contacts.failure');
        }
            

        // Correo para tconecta

        $to_name    = $data['name'];
        $to_email   = 'ana.pereza@gmail.com';
        $emailData  = $data;

        try {
            Mail::send('emails.provider', $emailData, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                        ->subject('Contacto Tconecta');
    
                $message->from('shopify765@gmail.com','Contacto Tconecta');
            });
        } catch (Exception $error) {
            return view('contacts.failure');
        }
            

        
        Contact::create($data);
    
        return view('contacts.success');
    }
}