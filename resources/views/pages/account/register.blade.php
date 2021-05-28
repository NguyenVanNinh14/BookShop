@extends('page-layout')
@section('content')

<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- user-login-area-start -->
		<div class="user-login-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="login-title text-center mb-30">
							<h2>Đăng ký</h2>
						</div>
					</div>
					<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <form action="{{route('user-register')}}" method="POST">
                        @csrf
						<div class="billing-fields">
							<div class="single-register">
									<label>Họ và tên</label>
									<input type="text" name="name" placeholder="họ và tên..."/>
                                    @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
											<label>Email<span>*</span></label>
											<input type="text" name="email" placeholder="email..."/>
                                            @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
											<label>Số điện thoại<span>*</span></label>
											<input type="text" name="phone" placeholder="số điện thoại..." />
                                            @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror
									</div>
								</div>
							</div>
							<div class="single-register">
								<label>Giới tính<span>*</span></label>
								<select class="chosen-select" name="sex" style="width:100%;" data-placeholder="Default Sorting">
									<option value="1">Nam</option>
									<option value="0">Nữ</option>
								</select>
							</div>
							<div class="single-register">
									<label>Địa chỉ<span>*</span></label>
									<input type="text" name="address" placeholder="địa chỉ..."/>
                                    @error('address')<div class="alert alert-danger">{{ $message }}</div>@enderror
							</div>
							<div class="single-register">
									<label>Mật khẩu<span>*</span></label>
									<input type="password" name="password" placeholder="mật khẩu..."/>
                                    @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
							</div>
							<div class="single-register">
									<label>Nhập lại mật khẩu<span>*</span></label>
									<input type="password" name="re_password" placeholder="nhập lại mật khẩu"/>
                                    @error('re_password')<div class="alert alert-danger">{{ $message }}</div>@enderror
							</div>
							<div class="single-register">
								<button type="submit" >Đăng ký</button>
							</div>
						</div>
                    </form>
					</div>
				</div>
			</div>
		</div>


        @endsection
