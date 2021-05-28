@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Danh mục</a>
                                    <span class="breadcrumb-item active">Sửa danh mục</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Sửa danh mục sản phẩm</h4>
                            </div>

                            <form action="{{route('update-category-product', $edit['category_id'])}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group ">
                                            <input type="hidden" class="form-control" name="category_product_id" value="{{$edit->category_id}}" >
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label">Tên danh mục</label>
                                            <input type="text" class="form-control" name="category_product_name" value="{{$edit->category_name}}" >
                                            @error('category_product_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('category')}}">Trở lại</a></button>
                                                    <button type="submit" name="edit_category_product" class="btn btn-gradient-success">Sửa Danh mục</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
@endsection
