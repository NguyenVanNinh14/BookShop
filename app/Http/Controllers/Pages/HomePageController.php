<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;


use function Symfony\Component\VarDumper\Dumper\esc;

class HomePageController extends Controller
{
    public function show_register(){
        return view('pages.account.register');
    }

    public function show_login(){
        return view('pages.account.login');
    }

    public function index(){
        $new_product = Product::query()->where('product_status', 1)->where('product_new', 1)->limit(10)->get();
        $selling_product = Product::query()->where('product_status',1)->where('product_selling', 1)->limit(10)->get();
        $hot_product = Product::query()->where('product_status', 1)->where('product_hot', 1)->limit(10)->get();
        return view('pages.home', compact('new_product', 'selling_product', 'hot_product'));
    }
    // sản phẩm mới
    public function list_new_product(){
        $genre = Genre::query()->where('genre_status', 1)->get();
        $list_new_product = Product::query()->where('product_status',1)->where('product_new', 1)->paginate(1);
        return view('pages.new_product.list_new_product', compact('list_new_product', 'genre'));

    }
    //sản phẩm bán chạy
    public function list_selling_product(){
        $genre = Genre::query()->where('genre_status', 1)->get();
        $list_selling_product = Product::query()->where('product_status',1)->where('product_selling', 1)->paginate(5);
        return view('pages.selling_product.list_selling_product', compact('list_selling_product','genre'));

    }
    // sản phẩm nổi bật
    public function list_hot_product(){
        $genre = Genre::query()->where('genre_status', 1)->get();
        $list_hot_product = Product::query()->where('product_status',1)->where('product_hot', 1)->paginate(5);
        return view('pages.hot_product.list_hot_product', compact('list_hot_product','genre'));

    }

    //sản phẩm theo loại
    public function list_genre_product($gen_pro_id){
        $genre = Genre::query()->where('genre_status', 1)->get();
        $genre_product = Product::query()->where('product_status', 1)->where('genre_id', $gen_pro_id)->paginate(20);
        return view('pages.genre_product.list_genre_product', compact('genre_product','genre'));
    }

    // sản phẩm chi tiết
    public function list_product_detail($product_detail_id){
        $product_detail = Product::query()->where('product_status', 1)->where('product_id', $product_detail_id)->first();
        $product_genre = Product::query()->where('product_status', 1)->get();
        $product_other = Product::query()->where('product_status', 1)->where('product_id','<>', $product_detail_id)->get();
        $comments = Comment::query()->where('com_product', $product_detail_id)->get();
        return view('pages.product_detail.list_product_detail', compact('product_detail', 'product_genre', 'product_other', 'comments'));
    }

    //comment
    public function detailComment(CommentRequest $request , $product_detail_id){
        $comment = new Comment();
        $comment->com_name = $request->name;
        $comment->com_email = $request->email;
        $comment->com_content = $request->content;
        $comment->com_product = $product_detail_id;
        $comment->save();

        return redirect()->back();
    }


    public function search(Request $request){
        $product = Product::query()->where('product_name', 'like' ,'%'.$request->product_search.'%')->paginate(20);
        return view('pages.search.list_search', compact('product'));
    }


    // Dangki
    public function user_register(RegisterRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->sex = $request->sex;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();

        if($user->id){
            return redirect()->route('show-login');
        }else{
            return redirect()->back();
        }
    }

    public function user_login(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('rememberme'))) {
            $request->session()->regenerate();

            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'Tài khoản hoặc mật khẩu bị sai.',
        ]);
    }

    public function user_logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
