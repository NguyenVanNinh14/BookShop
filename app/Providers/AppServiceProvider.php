<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Genre;
use App\Http\View\Composers\ProfileComposer;
use Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pages/header', function($view){
            $genre_pro = Genre::query()->where('genre_status', 1)->get();
            $view->with('genre_pro',$genre_pro);
        });

        view()->composer('pages/header', function($view){
            $category_pro = Category::query()->where('category_status', 1)->get();
            $view->with('category_pro',$category_pro);
        });

        View()->composer('*', function($view){
            // if(Session('cart')){
            //     $oldcart = Session::get('cart');
            //     $cart = new Cart($oldcart);
            //     $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            // }
            if(Cart::getContent()) {
                $cart_data = Cart::getContent();
                $cart_subtotal = Cart::getSubTotal();
                $view->with(['cart_data'=>$cart_data,'cart_subtotal' => $cart_subtotal]);
            }

        });

    }
}
