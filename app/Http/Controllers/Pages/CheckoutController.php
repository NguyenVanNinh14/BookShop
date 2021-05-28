<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function showCheckout(){
        $cart_data = Cart::getContent();
        return view('pages.cart_product.show_checkout', $cart_data);
    }

    public function checkout(Request $request){

    $cart_data            = Cart::getContent();
    $cart_subtotal        = Cart::getSubTotal();
    $order                = new Order();
    $order->user_id       = Auth::user()->id;
    $order->order_email   = Auth::user()->email;
    $order->total_price   = $cart_subtotal;
    $order->order_name    = $request->order_name;
    $order->order_phone   = $request->order_phone;
    $order->order_note    = $request->order_note;
    $order->order_address = $request->order_address;
    $order->order_status  = '1';
    $order->order_method  = $request->order_method;

     if ($order->save()) {
      $order_id     = DB::getPdo()->lastInsertId();
      foreach ($cart_data as $value) {
        $orderdetail               = new OrderDetail();
        $orderdetail->order_id     = $order_id;
        $orderdetail->product_id   = $value->attributes->product_id;
        $orderdetail->user_id      = Auth::user()->id;
        $orderdetail->product_name = $value->name;
        $orderdetail->price        = $value->price;
        $orderdetail->quantity     = $value->quantity;
        $query = $orderdetail->save();

      }
      if ($query) {

          return redirect()->route('thanks');
      }
    }
    }

    public function thank()
  {
    Cart::clear();
    return view('pages.cart_product.thanks');
  }
}
