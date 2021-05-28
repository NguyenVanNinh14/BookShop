@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Đối tác</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <!-- <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a> -->
                                    <a class="breadcrumb-item" href="#">Tác giả</a>
                                    <span class="breadcrumb-item active">Sửa tác giả</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Sửa tác giả</h4>
                            </div>

                            <form action="{{route('edit-author', $update['author_id'])}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group ">
                                            <input type="hidden" class="form-control" name="author_id" value="{{$update->author_id}}" >
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label">Tên</label>
                                            <input type="text" class="form-control" name="author_name" value="{{$update->author_name}}" >
                                            @error('author_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-author')}}">Trở lại</a></button>
                                                    <button type="submit" name="edit_author" class="btn btn-gradient-success">Sửa Tác giả</button>
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
