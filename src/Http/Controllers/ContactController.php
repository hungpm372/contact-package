<?php

namespace Hungpm\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Hungpm\Contact\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('contact::contact');
    }

    public function send(Request $request): void
    {
        $contact = new Contact($request->all());
        $contact->save();
    }
}
