<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class SupplierController extends Controller
{
    public function list_supplier(){
        Gate::authorize('checkAdmin');
        $list = Supplier::all();

        return view('admins.supplier.list_supplier', compact('list'));
    }

    public function create_supplier(){
        Gate::authorize('checkAdmin');
        return view('admins.supplier.create_supplier');
    }

    public function add_supplier(SupplierRequest $request){
        Gate::authorize('checkAdmin');
        $add = new Supplier();
        $add->supplier_name = $request->supplier_name;
        $add->save();

        return redirect()->route('list-supplier');
    }

    public function update_supplier($supplier_id){
        Gate::authorize('checkAdmin');
        $update = Supplier::find($supplier_id);
        return view('admins.supplier.update_supplier', compact('update'));
    }

    public function edit_supplier(SupplierRequest $request, $supplier_id){
        Gate::authorize('checkAdmin');

        $edit = Supplier::findorFail($supplier_id);
        $edit->supplier_name = $request->supplier_name;

        $edit->save();
        return redirect()->route('list-supplier');
    }

    public function delete_supplier($supplier_id){
        Gate::authorize('checkAdmin');

        Supplier::destroy($supplier_id);

        return redirect()->route('list-supplier');
    }
}
