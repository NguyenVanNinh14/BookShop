<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class CategoryController extends Controller
{
    public function category(){

        Gate::authorize('checkAdmin');
        $category = Category::all();
        return view('admins.category.category', compact('category'));

    }

    public function create_category(){
        Gate::authorize('checkAdmin');
        return view('admins.category.create_category');
    }

    //thêm danh mục
    public function create_category_product(CategoryRequest $request){
        // category_name từ csdl còn category_product_name là từ ng dùng nhập
        Gate::authorize('checkAdmin');
        $data = new Category();
        $data->category_name = $request->category_product_name;
        $data->category_status = $request->category_product_status;
        $data->save();

        return redirect()->route('category');
    }

    // active
    public function unactive_category_product($category_product_id){
        Gate::authorize('checkAdmin');
        DB::table('categories')->where('category_id', $category_product_id)->update(['category_status'=>1]);
        return redirect()->route('category');
    }

    public function active_category_product($category_product_id){
        Gate::authorize('checkAdmin');
        DB::table('categories')->where('category_id', $category_product_id)->update(['category_status'=>0]);
        return redirect()->route('category');
    }

    // sửa danh mục
    public function edit_category_product($category_product_id){
        Gate::authorize('checkAdmin');
        $edit = Category::find($category_product_id);
        return view('admins.category.update_category', compact('edit'));
    }

    public function update_category_product(CategoryRequest $request, $category_product_id){
        Gate::authorize('checkAdmin');
        $update = Category::findorFail($category_product_id);
        $update->category_name = $request->category_product_name;
        $update->save();

        return redirect()->route('category');
    }

    // xóa
    public function delete_category_product($category_product_id){
        Gate::authorize('checkAdmin');
        category::destroy($category_product_id);

        return redirect()->route('category');
    }


}
