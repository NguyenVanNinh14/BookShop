@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Khách hàng</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <span class="breadcrumb-item active">khách hàng</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <!-- <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('create-author')}}"> Thêm mới + </a></button>
                                        </div> -->
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <form action="{{route('cus-search')}}" method="GET">
                                            <div class="input-group">
                                                <input type="text" name="cus_search" class="form-control" placeholder="Tìm kiếm...">
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
                                    @if ($customer->count() > 0)
                                    <table id="dt-opt" class="table table-hover table-l">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên</th>
                                                <th>SĐT</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Đơn hàng</th>
                                                <th>Số tiền</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        @php
                                            $stt = 1;
                                            $none="None";
                                         @endphp
                                         @foreach($customer as $customer)
                                        <tbody>
                                            <tr>
                                                <td>{{$stt++}} </td>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->phone}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->address}}</td>
                                                <td>
                                                    @php
                                                    $count = DB::table('order')->where('user_id',$customer->id)->get();
                                                    @endphp
                                                    {{ count($count) }} đơn hàng
                                                </td>
                                                <td>
                                                    @php
                                                    $total = DB::table('order')->where('user_id',$customer->id)->sum('total_price');
                                                        echo number_format($total);
                                                    @endphp
                                                </td>
                                                <td class="text-center font-size-18">
                                                    <a href="" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    @else
                                    <p style="text-align: center;" style="font-weight:bold">Data is empty</p>
                                    @endif
                                </div>
                            </div>
                        </div>
</div>
@endsection
