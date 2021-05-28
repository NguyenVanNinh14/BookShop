<header>
			<!-- header-top-area-start -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="language-area">
								<ul>
									<li><img src="/frontend/img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
										<div class="header-sub">
											<ul>
												<li><a href="#"><img src="/frontend/img/flag/2.jpg" alt="flag" />france</a></li>
												<li><a href="#"><img src="/frontend/img/flag/3.jpg" alt="flag" />croatia</a></li>
											</ul>
										</div>
									</li>
									<li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
										<div class="header-sub dolor">
											<ul>
												<li><a href="#">EUR €</a></li>
												<li><a href="#">USD $</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div> -->
						<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
							<div class="account-area text-right" style="text-align: right;">
								<ul>
                                @if(Auth::check())
									<li><a href="{{route('user-logout')}}">Xin chào: {{Auth::User()->name}} - Đăng xuất</a></li>
                                @else
                                     <li><a href="{{route('show-register')}}">Đăng ký</a></li>
									<li><a href="{{route('show-login')}}">Đăng nhập</a></li>
                                @endif
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
							<div class="header-search">
								<form action="{{route('search')}}" method="GET">
									<input name="product_search" type="text" placeholder="Bạn có thể tìm kiếm ở đây..." />
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
							<div class="logo-area text-center logo-xs-mrg">
								<a href="{{route('index')}}"><img src="/frontend/img/logo/logo.png" alt="logo" /></a>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="my-cart">

								<ul>
									<li><a href="#"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a>
										<span >
                                        {{$cart_data ? count($cart_data) : 0}}
                                        </span>
                                        <div class="mini-cart-sub">
                                            @if(count($cart_data) > 0)
                                            @foreach($cart_data as $value)
                                            <div class="cart-product">
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="/uploads/product/{{$value->attributes->avatar}}" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#"></a></h5>
														<p>{{ number_format($value->price)}} vnđ</p>
													</div>
													<div class="cart-icon">
													    <a href="{{route('delete-item-cart',[$value->id])}}"><i class="fa fa-remove"></i></a>
													</div>
												</div>
											</div>
                                            @endforeach
											<div class="cart-totals">
												<h5>Tổng tiền <span>{{ number_format($cart_subtotal)}} vnđ </span></h5>
											</div>
											<div class="cart-bottom">
												<a class="view-cart" href="{{route('show-cart')}}">Chi tiết đơn hàng</a>
												<a href="checkout.html">Check out</a>
											</div>
										</div>
                                        @endif
									</li>
								</ul>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->
			<!-- main-menu-area-start -->
			<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="menu-area">
								<nav>
									<ul>
										<li class="active"><a href="{{route('index')}}">Home<i class="fa fa-angle-down"></i></a>
										</li>
                                        @foreach($category_pro as $key => $cate_pro)
                                        <li>
										<a href="#">{{$cate_pro->category_name}}<i class="fa fa-angle-down"></i></a>

											<div class="mega-menu">
												<span>
													<a href="#" class="title">Thể loại</a>
                                                @foreach($genre_pro as $key => $gen_pro)
													<a href="{{route('list-genre-product', $gen_pro->genre_id)}}">{{$gen_pro->genre_name}}</a>
                                                @endforeach
												</span>
											</div>
										</li>
                                        @endforeach
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
		</header>
		<!-- header-area-end -->


