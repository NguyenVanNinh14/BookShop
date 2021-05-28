<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Supplier;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class ProductController extends Controller
{
    public function list_product(){
        Gate::authorize('checkAdmin');
        $list = Product::paginate(5);
        return view('admins.product.list_product', compact('list'));
    }

    //active product status
    public function unactive_product_status($product_id){
        Gate::authorize('checkAdmin');
        DB::table('products')->where('product_id', $product_id)->update(['product_status'=>1]);
        return redirect()->route('list-product');
    }
    public function active_product_status($product_id){
        Gate::authorize('checkAdmin');
        DB::table('products')->where('product_id', $product_id)->update(['product_status'=>0]);
        return redirect()->route('list-product');
    }

    // create
    public function create_product(){
        Gate::authorize('checkAdmin');
        $category_product = Category::all();
        $publisher_product = Publisher::all();
        $supplier_product = Supplier::all();
        $genre_product = Genre::all();
        $author_product = Author::all();
        return view('admins.product.create_product', compact('category_product', 'publisher_product', 'supplier_product', 'genre_product', 'author_product'));
    }
    public function add_product(ProductRequest $request){
        Gate::authorize('checkAdmin');
        $add = new Product();
        $add->product_name = $request->product_name;
        $add->product_price = $request->product_price;
        $add->promotional_price = $request->promotional_price;
        $add->product_hot = $request->product_hot;
        $add->product_status = $request->product_status;
        $add->product_new = $request->product_new;
        $add->product_selling = $request->product_selling;
        $add->product_content = $request->product_content;
        $add->category_id = $request->product_category;
        $add->genre_id = $request->product_genre;
        $add->publisher_id = $request->product_publisher;
        $add->supplier_id = $request->product_supplier;
        $add->author_id = $request->product_author;
        if($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $file_name = $file->getClientOriginalName();
            $image_name = current(explode('.' ,$file_name));
            $new_image = $image_name . '.' . $file->getClientOriginalExtension();
            $file_image = time() . '.' .$new_image;
            $file->move('uploads/product', $file_image);
            $add->product_image = $file_image;
        }

        $add->save();
        return redirect()->route('list-product');
    }

    //update
    public function update_product($product_id){
        Gate::authorize('checkAdmin');
        $update = Product::find($product_id);
        $category_product = Category::all();
        $publisher_product = Publisher::all();
        $supplier_product = Supplier::all();
        $genre_product = Genre::all();
        $author_product = Author::all();
        return view('admins.product.update_product', compact('update','category_product', 'publisher_product', 'supplier_product', 'genre_product', 'author_product'));
    }

    public function edit_product(ProductRequest $request ,$product_id){
        Gate::authorize('checkAdmin');
        $edit = Product::findOrFail($product_id);

        $edit->product_name = $request->product_name;
        $edit->product_price = $request->product_price;
        $edit->promotional_price = $request->promotional_price;
        $edit->product_hot = $request->product_hot;
        $edit->product_status = $request->product_status;
        $edit->product_new = $request->product_new;
        $edit->product_selling = $request->product_selling;
        $edit->product_content = $request->product_content;
        $edit->category_id = $request->product_category;
        $edit->genre_id = $request->product_genre;
        $edit->publisher_id = $request->product_publisher;
        $edit->supplier_id = $request->product_supplier;
        $edit->author_id = $request->product_author;
        if($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $file_name = $file->getClientOriginalName();
            $image_name = current(explode('.' ,$file_name));
            $new_image = $image_name . '.' . $file->getClientOriginalExtension();
            $file_image = time() . '.' .$new_image;
            $file->move('uploads/product', $file_image);
            $edit->product_image = $file_image;
        }

        $edit->save();
        return redirect()->route('list-product');


    }

    // delete
    public function delete_product($product_id){
        Gate::authorize('checkAdmin');

        Product::destroy($product_id);

        return redirect()->route('list-product');
    }

    //search

    public function product_search(Request $request){
        Gate::authorize('checkAdmin');
        $search = Product::query()->where('product_name', 'like' ,'%'.$request->admin_search.'%')->paginate(20);
        return view('admins.product.search_product', compact('search'));
    }
}
