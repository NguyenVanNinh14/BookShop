@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Thể loại</a>
                                    <span class="breadcrumb-item active">Thêm thể loại</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Thêm thể loại</h4>
                            </div>
                            <form action="{{route('add-genre')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group ">
                                            <label class="control-label">Tên thể loại</label>
                                            <input type="text" class="form-control" name="genre_name" >
                                            @error('genre_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Trạng thái</label>
                                                <select name="genre_status" class="form-control">
                                                    <option value="0">Ẩn</option>
                                                    <option value="1">Hiển thị</option>
                                                </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('genre')}}">Trở lại</a></button>
                                                    <button type="submit" name="genre" class="btn btn-gradient-success">Thêm thể loại</button>
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
