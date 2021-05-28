@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Đối tác</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <span class="breadcrumb-item active">Nhà phát hành</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info"><a style="color:white;" href="{{route('create-publisher')}}"> Thêm mới + </a></button>
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
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach($list as $key => $value )
                                        <tbody>
                                            <tr>
                                                <td>{{$value->publisher_name}} </td>
                                                <td class="text-center font-size-18">
                                                    <a href="{{route('update-publisher', $value['publisher_id'])}}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('delete-publisher', $value['publisher_id'])}}" class="text-gray"><i class="ti-trash"></i></a>
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
