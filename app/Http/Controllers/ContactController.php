<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

// standart validation mode

class ContactController extends Controller{
    public function submit(ContactRequest $req) {
        // $validate = $req -> validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:100'
        // ]);
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');  
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
    
        $contact->save();

        return redirect()->route('home')->with('success', 'message added');
    }
}
