@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Đơn hàng</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <span class="breadcrumb-item active">Danh sách đơn hàng</span>
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
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <form action="{{route('order-search')}}" method="GET">
                                            <div class="input-group">
                                                <input type="text" name="order-search" class="form-control" placeholder="Tìm kiếm...">
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
                                                <th>STT</th>
                                                <th>Tài khoản</th>
                                                <th>Thông tin</th>
                                                <th>Tổng tiền</th>
                                                <th>Trạng thái</th>
                                                <th></th>
                                            </tr>
                                        </thead>


                                        @php
                                            $stt = 1;
                                        @endphp
                                        @foreach($search as $order)
                                        <tbody>
                                            <tr>
                                                <td>{{$stt++}}</td>
                                                <td>{{$order->users->email}}</td>
                                                <td>
                                                    <li>Họ tên: {{$order->order_name}}</li>
                                                    <li>Email: {{$order->order_email}}</li>
                                                    <li>SĐT: {{$order->order_phone}} </li>
                                                    <li>Địa chỉ: {{$order->order_address}}</li>
                                                    <li>Thanh toán:{{$order->order_method}}</li>
                                                </td>
                                                <td>{{number_format($order->total_price)}} vnđ</td>

                                                <td>@if($order->order_status == 1)
                                                    <span class="label label-success" style="margin-left: 10px">Đang giao hàng</span>
                                                     @elseif($order->order_status == 2)
                                                    <span class="label label-primary" style="margin-left: 10px">Đang giao</span>
                                                     @elseif($order->order_status == 3)
                                                    <span class="label label-danger" style="margin-left: 10px">Đã hủy</span>

                                                     @endif</td>
                                                <td class="text-center font-size-18">
                                                    <a href="{{route('view-order', $order['order_id'])}}" class="text-gray m-r-15"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                    <a href="{{route('update-order',$order['order_id'])}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('die-order',$order['order_id'])}}" class="text-gray"><i class="ti-trash"></i></a>
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
