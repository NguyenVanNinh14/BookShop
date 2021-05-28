<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use Illuminate\Support\Facades\Gate;


class GenreController extends Controller
{
    public function genre(){
        Gate::authorize('checkAdmin');
        $genre = Genre::all();
        return view('admins.genre.genre', compact('genre'));
    }

    // create genre
    public function create_genre(){
        Gate::authorize('checkAdmin');
        return view('admins.genre.create_genre');
    }

    public function add_genre(GenreRequest $request){
        Gate::authorize('checkAdmin');
        $add = new Genre();
        $add->genre_name = $request->genre_name;
        $add->genre_status = $request->genre_status;
        $add->save();

        return redirect()->route('genre');
    }

    // active
    public function unactive_genre($genre_id){
        Gate::authorize('checkAdmin');
        DB::table('genres')->where('genre_id' , $genre_id)->update(['genre_status' => 1]);
        return redirect()->route('genre');
    }
    public function active_genre($genre_id){
        Gate::authorize('checkAdmin');
        DB::table('genres')->where('genre_id' , $genre_id)->update(['genre_status' => 0]);
        return redirect()->route('genre');
    }

    // update
    public function update_genre($genre_id){
        Gate::authorize('checkAdmin');
        $update = Genre::find($genre_id);
        return view('admins.genre.update_genre', compact('update'));
    }
    public function edit_genre(GenreRequest $request, $genre_id){
        Gate::authorize('checkAdmin');
        $edit = Genre::findorFail($genre_id);
        $edit->genre_name = $request->genre_name;
        $edit->save();

        return redirect()->route('genre');
    }

    // delete
    public function delete_genre($genre_id){
        Gate::authorize('checkAdmin');
        Genre::destroy($genre_id);
        return redirect()->route('genre');
    }


}
