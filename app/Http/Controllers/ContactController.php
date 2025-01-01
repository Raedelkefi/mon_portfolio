<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function getContact(Request $req){
        
        $contact = new contact;

        $contact->name = $req->name;
        
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;

    
            $contact->save();
            
            return redirect('/')->with('success', 'Contact added successfully!');
        
    }
}
