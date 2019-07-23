<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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
            'name' => 'required|string',
            'email' => 'required|email|string',
            'phone' => 'required|min:5',
            'city' => 'required|min:5'
        ]);

        $to_name = $data['name'];
        $to_email = $data['email'];
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
            
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Artisans Web Testing Mail');
            $message->from('shopify765@gmail.com','Test tconecta');
        });
        

        $contact = Contact::create($data);
        
        dd($contact);
        

        return view('contacts.success', compact('contact'));
    }
}