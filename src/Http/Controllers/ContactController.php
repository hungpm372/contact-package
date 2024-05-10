<?php

namespace Hungpm\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Hungpm\Contact\Mail\ContactMailable;
use Hungpm\Contact\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact::contact');
    }

    public function send(Request $request): RedirectResponse
    {
        $contact = new Contact($request->all());
        $contact->save();
        Mail::to('hungpm372@gmail.com')->send(new ContactMailable($request->message));
        return redirect(route('contact'));
    }
}
