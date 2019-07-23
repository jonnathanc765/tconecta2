<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mails = Mail::all();
        return view('mails.index', compact('mails'));
    }
}
