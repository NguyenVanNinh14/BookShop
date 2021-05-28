@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Liên hệ</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a class="breadcrumb-item" href="#">Danh sách đơn hàng</a>
                                    <span class="breadcrumb-item active">Sửa trạng thái</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Sửa Trạng thái</h4>
                            </div>

                            <form action="{{route('edit-order', $update['order_id'])}}" method="POST">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                    <div class="form-group col-md-6">
                                                <label class="control-label">Trạng thái</label>
                                                <select name="status" class="form-control">
                                                    <option value="1">Đang giao hàng</option>
                                                    <option value="2">Đã giao hàng</option>
                                                    <option value="3">Đã Hủy</option>
                                                </select>
                                            </div>
                                        <div class="form-row">
                                            <div class="col-sm-6">
                                                <div class="text-sm-right">
                                                <button class="btn btn-gradient-success"><a style="color:white ;" href="{{route('list-order')}}">Trở lại</a></button>
                                                    <button type="submit" name="edit_genre" class="btn btn-gradient-success">Sửa Trạng thái</button>
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
