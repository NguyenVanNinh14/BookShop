@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Đối tác</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Nhà phát hành</a>
                                    <span class="breadcrumb-item active">Thêm nhà phát hành</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Thêm nhà phát hành</h4>
                            </div>

                            <form action="{{route('add-publisher')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group ">
                                            <label class="control-label">Tên</label>
                                            <input type="text" class="form-control" name="publisher_name"  >
                                            @error('publisher_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-publisher')}}">Trở lại</a></button>
                                                    <button type="submit" name="create_publisher" class="btn btn-gradient-success">Thêm nhà phát hành</button>
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
