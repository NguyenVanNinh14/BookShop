@extends('page-layout')
@section('content')

<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Trang chủ</a></li>
								<li><a href="#" class="active">đăng nhập</a></li>
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
							<h2>Đăng nhập</h2>
						</div>
					</div>
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                    <form action="{{route('user-login')}}" method="POST">
                    @csrf
						<div class="login-form">
							<div class="single-login">
								<label>Email<span>*</span></label>
								<input type="text" name="email" />
                                @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
							</div>
							<div class="single-login">
								<label>Mật khẩu <span>*</span></label>
								<input type="password" name="password" />
                                @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
							</div>
							<div class="single-login single-login-2">
								<button type="submit">Đăng nhập</button>
								<input id="rememberme" type="checkbox" name="rememberme" value="forever">
								<span>Nhớ mật khẩu</span>
							</div>
							<!-- <a href="#">Lost your password?</a> -->
						</div>
                        </form>
					</div>
				</div>
			</div>
		</div>

@endsection
