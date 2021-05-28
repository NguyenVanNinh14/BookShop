@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Sản phẩm</a>
                                    <span class="breadcrumb-item active">Thêm sản phẩm</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Thêm sản phẩm</h4>
                            </div>
                            <form action="{{route('add-product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">

                                        <div class="form-group">
                                            <label class="control-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}"  >
                                            @error('product_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Ảnh sản phẩm</label>
                                            <input type="file" class="form-control" name="product_image" value="{{old('product_image')}}" >
                                            @error('product_image')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Giá Sản phẩm</label>
                                                <input type="text" class="form-control" name="product_price" value="{{old('product_price')}}" >
                                                @error('product_price')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="control-label">Giá Giảm</label>
                                                <input type="text" class="form-control" name="promotional_price" value="{{old('promotional_price')}}" >
                                                @error('promotional_price')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="control-label">Danh mục</label>
                                                    <select name="product_category" class="form-control" value="{{old('product_category')}}" >
                                                        @foreach($category_product as $key => $category)
                                                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Thể loại</label>
                                            <select name="product_genre" class="form-control" value="{{old('product_genre')}}" >
                                                @foreach($genre_product as $key => $genre)
                                                    <option value="{{$genre->genre_id}}" >{{$genre->genre_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                            <label class="control-label">Nhà cung cấp</label>
                                                <select name="product_supplier" class="form-control" value="{{old('product_supplier')}}" >
                                                @foreach($supplier_product as $key => $supplier)
                                                    <option value="{{$supplier->supplier_id}}" >{{$supplier->supplier_name}}</option>
                                                @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Nhà xuất bản</label>
                                                <select name="product_publisher" class="form-control" value="{{old('product_publisher')}}" >
                                                @foreach($publisher_product as $key => $publisher)
                                                    <option value="{{$publisher->publisher_id}}">{{$publisher->publisher_name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Tác giả</label>
                                                <select name="product_author" class="form-control" value="{{old('product_author')}}" >
                                                @foreach($author_product as $key => $author)
                                                    <option value="{{$author->author_id}}" >{{$author->author_name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Sản phẩm mới</label>
                                                <select name="product_new" class="form-control" value="{{old('product_new')}}" >
                                                    <option value="0">Không</option>
                                                    <option value="1">New</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="control-label">Sản phẩm bán chạy</label>
                                                <select name="product_selling" class="form-control" value="{{old('product_selling')}}" >
                                                    <option value="0">Không</option>
                                                    <option value="1">Bán chạy</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="control-label">Trạng nổi bật</label>
                                                <select name="product_hot" class="form-control" value="{{old('product_hot')}}" >
                                                    <option value="0">Không</option>
                                                    <option value="1">Hot</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label class="control-label">Trạng thái</label>
                                                <select name="product_status" class="form-control" value="{{old('product_status')}}" >
                                                    <option value="0">Ẩn</option>
                                                    <option value="1">Hiện</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                                <label class="control-label">Nội dung sản phẩm</label>
                                                <textarea style="resize: none;" name="product_content" class="form-control" value="{{old('product_content')}}" rows="5"></textarea>
                                                @error('product_content')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>


                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                    <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-product')}}">Trở lại</a></button>
                                                    <button class="btn btn-gradient-success">Thêm sản phẩm </button>
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
