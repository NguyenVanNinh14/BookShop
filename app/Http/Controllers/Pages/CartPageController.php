<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartPageController extends Controller
{
    public function show_cart(){
        return view('pages.cart_product.list_cart_product');
    }

    public function add_cart(Request $request ,$id){
        $product = Product::find($id);
        Cart::add([
            'id'   => $id,
            'name' => $product->product_name,
            'price' => $product->promotional_price ? $product->promotional_price : $product->product_price,
            'quantity' =>  $request->quantity ?  $request->quantity: 1,
            'attributes' => ['avatar' =>$product->product_image, 'product_id' => $product->product_id]
        ]);
        $cart_data = Cart::getContent();
        return redirect()->back();
    }
    public function delete_item_cart($id){
        if (Cart::remove($id)) {
        $cart_subtotal = Cart::getSubTotal();
        return redirect()->back();
        }
    }
    public function updateCart(Request $req){
        Cart::update($req->id,['quantity' => array(
                'relative' => false,
                'value' => $req->qty
        )]);
        return true;
        }





}
