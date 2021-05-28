<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeAdminController extends Controller
{


    public function index(){

        Gate::authorize('checkAdmin');

        return view('admins.home');
    }



}
