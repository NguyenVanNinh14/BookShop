<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\InfoContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class AdContactController extends Controller
{
    public function list_contact(){
        Gate::authorize('checkAdmin');
        $list = InfoContact::all();

        return view('admins.contact.list_contact', compact('list'));
    }


    public function create_contact(){
        Gate::authorize('checkAdmin');
        return view('admins.contact.create_contact');
    }


    public function add_contact(ContactRequest $request){
        Gate::authorize('checkAdmin');
        $add = new InfoContact();
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->address = $request->address;
        $add->save();

        return redirect()->route('list-contact');
    }

    public function update_contact($id){
        Gate::authorize('checkAdmin');
        $update = InfoContact::find($id);
        return view('admins.contact.update_contact', compact('update'));
    }

    public function edit_contact(ContactRequest $request, $id){
        Gate::authorize('checkAdmin');
        $edit = InfoContact::findorFail($id);
        $edit->email = $request->email;
        $edit->phone = $request->phone;
        $edit->address = $request->address;
        $edit->save();
        return redirect()->route('list-contact');
    }

    public function die_contact($id){
        Gate::authorize('checkAdmin');

        InfoContact::destroy($id);

        return redirect()->route('list-contact');
    }

    public function pageContact(){
        Gate::authorize('checkAdmin');
        $page = Contact::all();
        return view('admins.pagecontact.show_contact', compact('page'));
    }

    public function updateContact($id){
        Gate::authorize('checkAdmin');
        $update = Contact::find($id);
        return view('admins.pagecontact.update_pcontact', compact('update'));

    }

    public function editContact(Request $request , $id){
        Gate::authorize('checkAdmin');
        $edit = Contact::findorFail($id);
        $edit->status = $request->status;
        $edit->save();
        return redirect()->route('page-contact');
    }

    public function conSearch(Request $request){
        Gate::authorize('checkAdmin');
        $search = Contact::query()->where('email' , 'like', '%'.$request->con_search.'%')->paginate(20);
        return view('admins.pagecontact.search_contact', compact('search'));
    }
}
