<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class CustomerController extends Controller
{
    public function list_customer(){
        Gate::authorize('checkAdmin');
        $customer = User::all();
        return view('admins.customer.list_customer', compact('customer'));
    }

    public function searchCustomer(Request $request){
        Gate::authorize('checkAdmin');
        $search = User::query()->where('email' , 'like', '%'.$request->cus_search.'%')->paginate(20);
        return view('admins.customer.search_customer', compact('search'));
    }
}
