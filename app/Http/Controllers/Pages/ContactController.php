<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\InfoContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact(){

        $contact = InfoContact::all();
        return view('pages.contact.list_contact', compact('contact'));
    }

    public function saveContact(Request $request){
        $save = new Contact();
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->address = $request->address;
        $save->status = '1';
        $save->note = $request->note;
        $save->save();

        return redirect()->back();
    }

}
