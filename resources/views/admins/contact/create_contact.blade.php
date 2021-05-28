@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Liên hệ</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Thông tin liê hệ</a>
                                    <span class="breadcrumb-item active">Thêm thông tin</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Thêm thông tin</h4>
                            </div>

                            <form action="{{route('add-contact')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group ">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email"  >
                                            @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label">Số điện thoại</label>
                                            <input type="text" class="form-control" name="phone"  >
                                            @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address"  >
                                            @error('address')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-contact')}}">Trở lại</a></button>
                                                    <button type="submit" name="create_author" class="btn btn-gradient-success">Thêm thông tin</button>
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
