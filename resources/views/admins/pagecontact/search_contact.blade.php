@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Liên hệ</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <span class="breadcrumb-item active">danh sách liên hệ</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('page-contact')}}"> Trở về </a></button>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <form action="{{route('con-search')}}" method="GET">
                                            <div class="input-group">
                                                <input type="text" name="con_search" class="form-control" placeholder="Tìm kiếm...">
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
                                                <th>Thông tin</th>
                                                <th>Nội dung</th>
                                                <th>Trạng thái</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @php
                                            $stt =1
                                        @endphp
                                    @foreach($search as $value)
                                        <tbody>
                                            <tr>
                                                <td>{{$stt++}}</td>
                                                <td>
                                                    <li>Họ tên: {{$value->name}}</li>
                                                    <li>Email: {{$value->email}}</li>
                                                    <li>SĐT: {{$value->phone}}</li>
                                                    <li>Địa chỉ: {{$value->address}}</li>
                                                </td>
                                                <td>{{$value->note}}</td>
                                                <td>
                                                    @if($value->status == 1)
                                                    <span>Đang xử lý </span>
                                                    @else
                                                    <span>Đã xử lý</span>
                                                    @endif
                                                </td>

                                                <td class="text-center font-size-18">
                                                    <a href="{{route('update-pcontact', $value['id'])}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="" class="text-gray"><i class="ti-trash"></i></a>
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
