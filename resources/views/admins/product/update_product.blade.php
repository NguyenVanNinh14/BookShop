@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <span class="breadcrumb-item active">Sửa sản phẩm</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Sửa sản phẩm</h4>
                            </div>
                            <form action="{{route('edit-product' , $update['product_id'])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">

                                        <div class="form-group">
                                            <label class="control-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="product_name" value="{{$update->product_name}}"  >
                                            @error('product_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Ảnh sản phẩm</label>
                                            <input type="file" class="form-control" name="product_image" value="{{$update->product_image}}">
                                            <img height="200" width="200" src="/uploads/product/{{$update->product_image}}" alt="">
                                            @error('product_image')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Giá Sản phẩm</label>
                                                <input type="text" class="form-control" name="product_price" value="{{$update->product_price}}" >
                                                @error('product_price')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Giá Giảm</label>
                                                <input type="text" class="form-control" name="promotional_price" value="{{$update->promotional_price}}" >
                                                @error('promotional_price')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label">Danh mục</label>
                                                <select name="product_category" class="form-control"  >
                                                @foreach($category_product as $key => $category)
                                                    <option value="{{$category->category_id}}" {{ ($update->category_id == $category->category_id) ? 'selected': '' }} >{{$category->category_name}}</option>
                                                @endforeach
                                                </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Thể loại</label>
                                            <select name="product_genre" class="form-control" >
                                                @foreach($genre_product as $key => $genre)
                                                    <option value="{{$genre->genre_id}}" {{ ($update->genre_id == $genre->genre_id) ? 'selected': '' }} >{{$genre->genre_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                            <label class="control-label">Nhà cung cấp</label>
                                                <select name="product_supplier" class="form-control" >
                                                @foreach($supplier_product as $key => $supplier)
                                                    <option value="{{$supplier->supplier_id}}" {{ ($update->supplier_id == $supplier->supplier_id) ? 'selected': '' }} >{{$supplier->supplier_name}}</option>
                                                @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Nhà xuất bản</label>
                                                <select name="product_publisher" class="form-control"  >
                                                @foreach($publisher_product as $key => $publisher)
                                                    <option value="{{$publisher->publisher_id}}" {{ ($update->publisher_id == $publisher->publisher_id) ? 'selected': '' }}  >{{$publisher->publisher_name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Tác giả</label>
                                                <select name="product_author" class="form-control"  >
                                                @foreach($author_product as $key => $author)
                                                    <option value="{{$author->author_id}}" {{ ($update->author_id == $author->author_id) ? 'selected': '' }} >{{$author->author_name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Sản phẩm mới</label>
                                                <select name="product_new" class="form-control">
                                                    <option value="0">Không</option>
                                                    <option value="1">New</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="control-label">Sản phẩm bán chạy</label>
                                                <select name="product_selling" class="form-control" >
                                                    <option value="0">Không</option>
                                                    <option value="1">Bán chạy</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="control-label">Sản phẩm nổi bật</label>
                                                <select name="product_hot" class="form-control" >
                                                    <option value="0">Không</option>
                                                    <option value="1">Hot</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="control-label">Trạng thái</label>
                                                <select name="product_status" class="form-control" >
                                                    <option value="0">Ẩn</option>
                                                    <option value="1">Hiện</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="control-label">Nội dung sản phẩm</label>
                                                <textarea style="resize: none;"  class="form-control" name="product_content" rows="5">{{$update->product_content}}</textarea>
                                                @error('product_content')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>


                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                    <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-product')}}">Trở lại</a></button>
                                                    <button class="btn btn-gradient-success">Sửa sản phẩm </button>
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
