@extends('admin-layout')
@section('content')
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Sản phẩm</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <span class="breadcrumb-item active">Bình luận</span>
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
                                        <form action="{{route('comment-search')}}" method="GET">
                                            <div class="input-group">
                                                <input type="text" name="comment_search" class="form-control" placeholder="Tìm kiếm...">
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
                                                <th>Tên</th>
                                                <th>Email</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Nội dung</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @php
                                            $stt = 1;
                                        @endphp
                                        @foreach($comments as $value)
                                        <tbody>
                                            <tr>
                                                <td>{{$stt++}}</td>
                                                <td>{{$value->com_name}}</td>
                                                <td>{{$value->com_email}}</td>
                                                <td>{{$value->products->product_name}}</td>
                                                <td>{{$value->com_content}}</td>
                                                <td class="text-center font-size-18">
                                                    <a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('delete-com', $value['com_id'])}}" class="text-gray"><i class="ti-trash"></i></a>
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
