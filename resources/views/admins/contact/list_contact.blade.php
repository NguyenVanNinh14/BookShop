@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Liên hệ</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <span class="breadcrumb-item active">Thông tin liên hệ</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('create-contact')}}"> Thêm mới + </a></button>
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
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                            </tr>
                                        </thead>
                                        @foreach($list as $ls)
                                        <tbody>
                                            <tr>
                                                <td>{{$ls->email}}</td>
                                                <td>{{$ls->phone}}</td>
                                                <td>{{$ls->address}}</td>
                                                <td class="text-center font-size-18">
                                                    <a href="{{route('update-contact',$ls['id'])}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('die-contact', $ls['id'])}}" class="text-gray"><i class="ti-trash"></i></a>
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
