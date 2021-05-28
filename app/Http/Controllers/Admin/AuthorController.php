<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Gate;

class AuthorController extends Controller
{
    public function list_author(){
        Gate::authorize('checkAdmin');
        $list = Author::all();

        return view('admins.author.list_author', compact('list'));
    }

    public function create_author(){
        Gate::authorize('checkAdmin');
        return view('admins.author.create_author');
    }

    public function add_author(AuthorRequest $request){
        Gate::authorize('checkAdmin');
        $add = new Author();
        $add->author_name = $request->author_name;
        $add->save();

        return redirect()->route('list-author');
    }

    public function update_author($author_id){
        Gate::authorize('checkAdmin');
        $update = Author::find($author_id);
        return view('admins.author.update_author', compact('update'));
    }

    public function edit_author(AuthorRequest $request, $author_id){
        Gate::authorize('checkAdmin');

        $edit = Author::findorFail($author_id);
        $edit->author_name = $request->author_name;

        $edit->save();
        return redirect()->route('list-author');
    }

    public function delete_author($author_id){
        Gate::authorize('checkAdmin');

        Author::destroy($author_id);

        return redirect()->route('list-author');
    }
}
