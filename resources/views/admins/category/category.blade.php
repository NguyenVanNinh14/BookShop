@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <!-- <a class="breadcrumb-item" href="#">Tables</a> -->
                                    <span class="breadcrumb-item active">Danh mục</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('create-category')}}"> Thêm mới + </a></button>
                                        </div>
                                        <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                                <span class="input-group-append">
                                                    <button class="btn btn-default btn-icon" type="button">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        </div> -->
                                    </div>
                                    <table id="dt-opt" class="table table-hover table-l">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Trạng thái</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach($category as $key => $value )
                                        <tbody>
                                            <tr>
                                                <td>{{$value->category_name}} </td>
                                                <td>
                                                    <?php
                                                        if($value->category_status==0){
                                                    ?>
                                                        <a href="{{route('unactive-category-product', $value['category_id'])}}"><span class="badge badge-pill badge-gradient-danger badge-lg">Ẩn</span></a>
                                                    <?php
                                                        }else{
                                                    ?>
                                                        <a href="{{route('active-category-product', $value['category_id'])}}"><span class="badge badge-pill badge-gradient-success badge-lg">Hiển thị</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center font-size-18">
                                                    <a href="{{route('edit-category-product', $value['category_id'])}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('delete-category-product', $value['category_id'])}}" class="text-gray"><i class="ti-trash"></i></a>
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
