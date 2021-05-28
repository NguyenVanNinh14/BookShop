@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Đối tác</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Nhà cung cấp</a>
                                    <span class="breadcrumb-item active">Sửa nhà cung cấp</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Sửa nhà cung cấp</h4>
                            </div>

                            <form action="{{route('edit-supplier', $update['supplier_id'])}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group ">
                                            <input type="hidden" class="form-control" name="supplier_id" value="{{$update->supplier_id}}" >
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label">Tên</label>
                                            <input type="text" class="form-control" name="supplier_name" value="{{$update->supplier_name}}" >
                                            @error('supplier_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-supplier')}}">Trở lại</a></button>
                                                    <button type="submit" name="edit_supplier" class="btn btn-gradient-success">Sửa nhà cung cấp</button>
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
