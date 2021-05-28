<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublishertRequest;
use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\Gate;


class PublisherController extends Controller
{
    public function  list_publisher(){
        Gate::authorize('checkAdmin');
        $list = Publisher::all();
        return view('admins.publisher.list_publisher', compact('list'));
    }

    public function create_publisher(){
        Gate::authorize('checkAdmin');
        return view('admins.publisher.create_publisher');
    }

    public function add_publisher(PublishertRequest $request){
        Gate::authorize('checkAdmin');
        $add = new Publisher();
        $add->publisher_name = $request->publisher_name;
        $add->save();

        return redirect()->route('list-publisher');

    }
    public function update_publisher($publisher_id){
        Gate::authorize('checkAdmin');
        $edit = Publisher::find($publisher_id);
        return view('admins.publisher.update_publisher', compact('edit'));
    }
    public function edit_publisher(PublishertRequest $request, $publisher_id){
        Gate::authorize('checkAdmin');
        $edit = Publisher::findorFail($publisher_id);
        $edit->publisher_name = $request->publisher_name;
        $edit->save();

        return redirect()->route('list-publisher');
    }

    public function delete_publisher($publisher_id){
        Gate::authorize('checkAdmin');
        Publisher::destroy($publisher_id);

        return redirect()->route('list-publisher');
    }
}
