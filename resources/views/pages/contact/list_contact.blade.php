@extends('page-layout')
@section('content')


<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="{{route('index')}}">Trang chủ</a></li>
								<li><a href="#" class="active">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- googleMap-area-start -->
		<div class="map-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="googleMap"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- googleMap-end -->
		<!-- contact-area-start -->
		<div class="contact-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="contact-info">
							<h3>Thông tin liên hệ của chúng tôi</h3>
                            @foreach($contact as $value)
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>Đại chỉ: </span>
                                    {{$value->address}}
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<span>Email: </span>
                                    {{$value->email}}
								</li>
								<li>
									<i class="fa fa-mobile"></i>
									<span>Số điện thoại: </span>
                                    {{$value->phone}}
								</li>
							</ul>
                            @endforeach
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="contact-form">
							<h3><i class="fa fa-envelope-o"></i>Thắc mắc</h3>
                            <form id="contact-form" action="{{route('contact')}}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form-3">
                                            <input name="name" type="text" placeholder="Họ tên">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form-3">
                                            <input name="phone" type="text" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form-3">
                                            <input name="email" type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form-3">
                                            <input name="address" type="text" placeholder="Địa chỉ">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                         <div class="single-form-3">
                                            <textarea name="note" placeholder=""></textarea>
                                            <button class="submit" type="submit">Gửi</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-area-end -->


@endsection
