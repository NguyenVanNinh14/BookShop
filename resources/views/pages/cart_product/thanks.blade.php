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
								<li><a href="#" class="active">giỏ hàng</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->


				<div style="text-align: center;" class="row">
                    <div class="">
                    <div>Đơn hàng của bạn đang được xử lý.</div>
                    <div>Cảm ơn bạn đã đặt hàng ở cửa hàng của chúng tôi</div><br>
                        <div class="buttons-cart mb-30">
                            <ul>
                                <li><a href="{{route('index')}}">Tiếp tục mua </a></li>
                            </ul>
                        </div>

                    </div>
                </div>

		<!-- cart-main-area-end -->

@endsection
