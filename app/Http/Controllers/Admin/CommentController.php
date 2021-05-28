<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function comment(){
        Gate::authorize('checkAdmin');
        $comments = Comment::all();
        return view('admins.comment.list_comment', compact('comments'));
    }

    public function deleteCom($id){
        Gate::authorize('checkAdmin');
            Comment::destroy($id);
            return redirect()->route('comment');
    }

    public function commentSearch(Request $request){
        Gate::authorize('checkAdmin');
        $search = Comment::query()->where('com_name', 'like', '%'.$request->comment_search.'%')->paginate(20);
        return view('admins.comment.search_comment', compact('search'));
    }
}
