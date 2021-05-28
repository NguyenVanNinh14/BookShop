@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <span class="breadcrumb-item active">Tìm kiếm sản phẩm</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('list-product')}}"> Trở về </a></button>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <form action="{{route('product-search')}}" method="GET">
                                            <div class="input-group">
                                                <input type="text" name="admin_search" class="form-control" placeholder="Tìm kiếm...">
                                                <span class="input-group-append">
                                                    <button class="btn btn-default btn-icon" type="submit">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    <table id="dt-opt" class="table table-hover table-l">
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Ảnh sản phẩm</th>
                                                <th>Danh mục</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Trạng thái</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach($search as $key => $ls)
                                        <tbody>
                                            <tr>
                                                <td>{{$ls->product_name}}</td>
                                                <td><img src="/uploads/product/{{$ls->product_image}}" height="100" width="100"></td>
                                                <td>{{$ls->categories->category_name}}</td>
                                                <td>{{$ls->product_price}}</td>
                                                <td>
                                                    <?php
                                                        if($ls->product_status == 0){
                                                    ?>
                                                        <a href="{{route('unactive-product-status', $ls['product_id'])}}"><span class="badge badge-pill badge-gradient-danger badge-lg">Ẩn</span></a>
                                                    <?php
                                                        }else{
                                                    ?>
                                                        <a href="{{route('active-product-status', $ls['product_id'])}}"><span class="badge badge-pill badge-gradient-success badge-lg">Hiển thị</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>

                                                <td class="text-center font-size-18">
                                                    <a href="{{route('update-product', $ls['product_id'])}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('delete-product', $ls['product_id'])}}" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
</div>
@endsection
