<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class OrderController extends Controller
{
    public function list_order(){
        Gate::authorize('checkAdmin');
        $orders = Order::all();
        return view('admins.order.list_order', compact('orders'));
    }

    public function updateOrder($id){
        Gate::authorize('checkAdmin');
        $update= Order::find($id);
        return view('admins.order.update_order', compact('update'));
    }

    public function editOrder(Request $request, $id)
    {
        Gate::authorize('checkAdmin');
            $edit = Order::findorFail($id);
            $edit->order_status = $request->status;
            $edit->save();
            return redirect()->route('list-order');
    }

        public function die_order($die){
            Gate::authorize('checkAdmin');
                Order::destroy($die);
                return redirect()->route('list-order');
        }

        public function view_order($id){
            Gate::authorize('checkAdmin');
            $order_detail = OrderDetail::where('order_id', $id)->get();
            return view('admins.order.view_order', compact('order_detail'));
        }

        public function orderSearch(Request $request){
            Gate::authorize('checkAdmin');
            $search = Order::query()->where('order_email', 'like', '%'.$request->order_search.'%')->paginate(20);
            return view('admins.order.search_order',compact('search'));
        }
}



