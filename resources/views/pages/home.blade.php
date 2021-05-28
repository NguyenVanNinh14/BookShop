@extends('page-layout')
@section('content')

<!-- banner-area-start -->
<div class="banner-area banner-res-large ptb-35">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-banner">
							<div class="banner-img">
								<a href="#"><img src="/frontend/img/banner/1.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Miễn phí ship</h4>
								<p>cho đơn hàng từ 100.000 đồng</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-banner">
							<div class="banner-img">
								<a href="#"><img src="/frontend/img/banner/2.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Đảm bảo</h4>
								<p>Hoàn lại tiền 100%</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
						<div class="single-banner">
							<div class="banner-img">
								<a href="#"><img src="/frontend/img/banner/3.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Thanh toán khi giao hàng</h4>
                                <p>đổi lại nếu nhầm free ship  </p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-banner mrg-none-xs">
							<div class="banner-img">
								<a href="#"><img src="/frontend/img/banner/4.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Liên hệ</h4>
								<p><a href="{{route('show-contact')}}">nhấn vào đây</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-area-end -->

<!-- slider-area-start -->
<div class="slider-area">
			<div class="slider-active owl-carousel">
				<div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(../frontend/img/slider/2.jpg);">
				    <div class="container">
				        <div class="slider-content slider-content-2 slider-animated-1">
                            <h1>We can help get your</h1>
                            <h2>Books in Order</h2>
                            <h3>and Accessories</h3>
                            <a href="#">Contact Us Today!</a>
                        </div>
				    </div>
				</div>
			</div>
		</div>
<!-- slider-area-end -->

		<!-- product-area-start -->
		<div class="product-area pt-95 xs-mb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-50">
							<h2>Sản phẩm mới</h2>
						</div>
					</div>

				</div>
				<!-- tab-area-start -->
                <h4 style="text-align:left ;"><a href="{{route('list-new-product')}}">Xem thêm </a></h4>
				<div class="tab-content">
					<div class="tab-pane active">
                        <div class="tab-active owl-carousel">

                            <!-- single-product-start -->
                            @foreach($new_product as $key => $new_pro)
                            <div style="height: 400px;" style="width: 300px;" class="product-wrapper">
                                <div class="product-img">
                                    <div>
                                        <img style="height: 270px;" style="width: 150px;" src="uploads/product/{{$new_pro->product_image}}"/>
                                    </div>
                                    <div class="quick-view">
                                        <a class="action-view" href="{{route('list-product-detail', $new_pro['product_id'])}}" data-target="#productModal" data-toggle="modal" title="Chi tiết">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            @if($new_pro->promotional_price == 0)
                                            @else
                                            <li><span class="discount-percentage">sale</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4>{{$new_pro->product_name}}</h4>
                                    <div class="product-price">
                                        <ul>
                                            @if($new_pro->promotional_price == 0)
                                            <li>{{number_format($new_pro->product_price) }} vnđ</li>
                                            @else
                                            <li>{{number_format($new_pro->promotional_price) }} vnđ</li>
                                            <li class="old-price">{{number_format($new_pro->product_price) }} vnđ</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{route('add-cart',[$new_pro->product_id])}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- single-product-end -->
                        </div>
					</div>
				</div>
				<!-- tab-area-end -->
			</div>
		</div>
		<!-- product-area-end -->

		<!-- banner-area-start -->
		<div class="banner-area-5 mtb-95">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-img-2">
							<a href="#"><img src="/frontend/img/banner/5.jpg" alt="banner" /></a>
							<div class="banner-text">
								<h3>G. Meyer Books & Spiritual Traveler Press</h3>
								<h2>Sale up to 30% off</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-area-end -->

        <!-- product-area-start -->
		<div class="new-book-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-50">
							<h2>Sản phẩm bán chạy</h2>
						</div>
					</div>
				</div>
				<!-- tab-area-start -->
                <h4 style="text-align:left ;"><a href="{{route('list-selling-product')}}">Xem thêm</a></h4>
				<div class="tab-content">
					<div class="tab-pane active" id="books">
                        <div class="tab-active owl-carousel">
                            <!-- single-product-start -->
                            @foreach($selling_product as  $key => $selling_pro)
                            <div style="height: 400px;" style="width: 300px;" class="product-wrapper">
                                <div class="product-img">
                                    <div>
                                        <img style="height: 270px;" style="width: 150px;" src="uploads/product/{{$selling_pro->product_image}}" alt="book" class="primary" />
                                    </div>
                                    <div class="quick-view">
                                        <a class="action-view" href="{{route('list-product-detail', $selling_pro['product_id'])}}" data-target="#productModal" data-toggle="modal" title="Chi tiết">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                        @if($selling_pro->promotional_price == 0)
                                        @else
                                        <li><span class="discount-percentage">sale</span></li>
                                        @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4>{{$selling_pro->product_name}}</h4>
                                    <div class="product-price">
                                        <ul>
                                            @if($selling_pro->promotional_price == 0)
                                            <li>{{number_format($selling_pro->product_price) }} vnđ</li>
                                            @else
                                            <li>{{number_format($selling_pro->promotional_price) }} vnđ</li>
                                            <li class="old-price">{{number_format($selling_pro->product_price) }} vnđ</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{route('add-cart', $selling_pro->product_id)}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- single-product-end -->
                        </div>
					</div>
				</div>
				<!-- tab-area-end -->
			</div>
		</div>
		<!-- product-area-end -->

        <!-- banner-static-area-start -->
		<div class="banner-static-area bg ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="banner-shadow-hover xs-mb">
							<a href="#"><img src="/frontend/img/banner/8.jpg" alt="banner" /></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="banner-shadow-hover">
							<a href="#"><img src="/frontend/img/banner/9.jpg" alt="banner" /></a>
						</div>
					</div>
				</div>
			</div>
		</div><br><br><br>
		<!-- banner-static-area-end -->

                <!-- product-area-start -->
		<div class="product-area mt-95 xs-mb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-50">
							<h2>Sản phẩm nổi bật</h2>
						</div>
					</div>
				</div>
				<!-- tab-area-start -->
                <h4 style="text-align:left ;"><a href="{{route('list-hot-product')}}">Xem thêm</a></h4>
				<div class="tab-content">
					<div class="tab-pane active" id="books">
                        <div class="tab-active owl-carousel">
                            <!-- single-product-start -->
                            @foreach($hot_product as  $key => $hot_pro)
                            <div style="height: 400px;" style="width: 300px;" class="product-wrapper">
                                <div class="product-img">
                                    <div>
                                        <img style="height: 270px;" style="width: 150px;" src="uploads/product/{{$hot_pro->product_image}}" alt="book" class="primary" />
                                    </div>
                                    <div class="quick-view">
                                        <a class="action-view" href="{{route('list-product-detail', $hot_pro['product_id'])}}" data-target="#productModal" data-toggle="modal" title="Chi tiết">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                        @if($hot_pro->promotional_price == 0)
                                        @else
                                        <li><span class="discount-percentage">sale</span></li>
                                        @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4>{{$hot_pro->product_name}}</h4>
                                    <div class="product-price">
                                    <ul>
                                            @if($hot_pro->promotional_price == 0)
                                            <li>{{number_format($hot_pro->product_price) }} vnđ</li>
                                            @else
                                            <li>{{number_format($hot_pro->promotional_price) }} vnđ</li>
                                            <li class="old-price">{{number_format($hot_pro->product_price) }} vnđ</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="{{route('add-cart', $hot_pro->product_id)}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- single-product-end -->
                        </div>
					</div>
				</div>
				<!-- tab-area-end -->
			</div>
		</div><br><br><br>
		<!-- product-area-end -->

		<!-- testimonial-area-start -->
		<div class="testimonial-area ptb-100 bg">
			<div class="container">
				<div class="row">
					<div class="testimonial-active owl-carousel">
						<div class="col-lg-12">
							<div class="single-testimonial text-center">
								<div class="testimonial-img">
									<a href="#"><i class="fa fa-quote-right"></i></a>
								</div>
								<div class="testimonial-text">
									<p>I'm so happy with all of the themes, great support, could not wish for more. These people are <br /> geniuses ! Kudo's from the Netherlands !</p>
									<a href="#">Sandy Wilcke/user</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-testimonial text-center">
								<div class="testimonial-img">
									<a href="#"><i class="fa fa-quote-right"></i></a>
								</div>
								<div class="testimonial-text">
									<p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support ,<br /> advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
									<a href="#">Sandy Wilcke/user</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial-area-end -->
		<!-- recent-post-area-start -->
		<div class="recent-post-area pt-95 pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-30 section-title-res">
							<h2>Những blog hữu ích</h2>
						</div>
					</div>
					<div class="post-active owl-carousel text-center">
						<div class="col-lg-12">
							<div class="single-post">
								<div class="post-img">
									<a href="#"><img src="/frontend/img/post/1.jpg" alt="post" /></a>
									<div class="blog-date-time">
									    <span class="day-time">06</span>
                                        <span class="moth-time">Dec</span>
									</div>
								</div>
								<div class="post-content">
									<h3><a href="#">Nam tincidunt vulputate felis</a></h3>
									<span class="meta-author"> Demo Posthemes </span>
									<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-post">
								<div class="post-img">
									<a href="blog-details.html"><img src="/frontend/img/post/2.jpg" alt="post" /></a>
									<div class="blog-date-time">
									    <span class="day-time">06</span>
                                        <span class="moth-time">Dec</span>
									</div>
								</div>
								<div class="post-content">
									<h3><a href="blog-details.html">Interdum et malesuada</a></h3>
									<span class="meta-author"> Demo Posthemes </span>
									<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-post">
								<div class="post-img">
									<a href="blog-details.html"><img src="/frontend/img/post/3.jpg" alt="post" /></a>
									<div class="blog-date-time">
									    <span class="day-time">07</span>
                                        <span class="moth-time">Dec</span>
									</div>
								</div>
								<div class="post-content">
									<h3><a href="blog-details.html">What is Bootstrap?</a></h3>
									<span class="meta-author"> Demo Posthemes </span>
									<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-post">
								<div class="post-img">
									<a href="blog-details.html"><img src="/frontend/img/post/4.jpg" alt="post" /></a>
									<div class="blog-date-time">
									    <span class="day-time">08</span>
                                        <span class="moth-time">Dec</span>
									</div>
								</div>
								<div class="post-content">
									<h3><a href="blog-details.html">Etiam eros massa</a></h3>
									<span class="meta-author"> Demo Posthemes </span>
									<p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- recent-post-area-end -->

        <!-- social-group-area-start -->
        <div class="social-group-area ptb-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="section-title-3">
							<h3>Facebook</h3>
						</div>
						<div class="twitter-content">
							<div class="twitter-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
							<div class="twitter-text">
								<p>
									Vào facebook để cập nhật nhanh nhất những cuốn sản phẩm mới sắp được bán ...
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="section-title-3">
							<h3>Ứng dụng liên lạc</h3>
						</div>
						<div class="link-follow">
							<ul>
								<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-flickr"></i></a></li> -->
								<!-- <li class="hidden-sm"><a href="#"><i class="fa fa-vimeo"></i></a></li> -->
								<li class="hidden-sm"><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- social-group-area-end -->

@endsection
