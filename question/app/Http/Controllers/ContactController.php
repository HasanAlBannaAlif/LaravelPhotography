<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function new_contact(Request $request){
        $this->validate($request,[
            'customer_name' => 'required',
            'comment' => 'required',
            'email' => 'required|email',
            'subject' => 'required'
        ]);

        $contact = new Contact();
        $contact->customer_name = $request->customer_name;
        $contact->comment = $request->comment;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->save();

        return back()->with('message','Comment Added Successfully!');
    }
    public function view_contact(){
        $contacts = Contact::orderBy('id','desc')->get();;
        return view('admin.view_contact.view_contact',['contacts'=>$contacts]);
    }
}
