@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Đơn hàng</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <!-- <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a> -->
                                    <a class="breadcrumb-item" href="#">Dánh sách đơn hàng</a>
                                    <span class="breadcrumb-item active">Thông tin chi tiết</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('list-order')}}"> Trở về </a></button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <table id="dt-opt" class="table table-hover table-l">
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Số lượng</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach($order_detail as $value)
                                        <tbody>
                                            <tr>
                                                <td>{{$value->product_name}}</td>
                                                <td>{{$value->price}}</td>
                                                <td>{{$value->quantity}}</td>
                                                <td></td>
                                                <td class="text-center font-size-18">
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                        </div>
</div>


@endsection
