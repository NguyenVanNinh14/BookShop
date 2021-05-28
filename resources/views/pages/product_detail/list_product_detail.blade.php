@extends('page-layout')
@section('content')

<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="{{route('index')}}">Trang chủ</a></li>
								<li><a href="#" class="active">Chi tiết sản phẩm</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- product-main-area-start -->
		<div class="product-main-area mb-70">
			<div class="container">
				<div class="row">

					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<!-- product-main-area-start -->
						<div class="product-main-area">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="/frontend/img/thum-2/1.jpg">
											  <img src="/uploads/product/{{$product_detail->product_image}}" alt="woman" />
											</li>
											<!-- <li data-thumb="img/thum-2/4.jpg">
											  <img src="img/flex/5.jpg" alt="woman" />
											</li>
											<li data-thumb="img/thum-2/2.jpg">
											  <img src="img/flex/2.jpg" alt="woman" />
											</li>
											<li data-thumb="img/thum-2/5.jpg">
											  <img src="img/flex/5.jpg" alt="woman" />
											</li> -->
										</ul>
									</div>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
									<div class="product-info-main">
										<div class="page-title">
											<h1>{{$product_detail->product_name}}</h1>
										</div>
										<div class="product-info-stock-sku">
											<span>Mã ID: </span>
											<div class="product-attribute">
												<!-- <span>SKU</span> -->
												<span>{{$product_detail->product_id}}</span>
											</div>
										</div>
										<div class="product-reviews-summary">
											<div class="rating-summary">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>
											<div class="reviews-actions">
												<a href="#">Đánh giá</a>
												<a href="#" class="view">Add Your Review</a>
											</div>
										</div>
										<div class="product-info-price">
											<div class="price-final">
                                            @if($product_detail->promotional_price == 0)
                                                <span>{{number_format($product_detail->product_price)}} vnđ</span>
                                            @else
												<span> {{number_format($product_detail->promotional_price)}} vnđ </span>
                                                <span> - </span>
												<span class="old-price" >{{number_format($product_detail->product_price)}} vnđ</span>
                                            @endif
											</div>
										</div>
										<div class="product-add-form">
											<form action="{{route('add-cart',[$product_detail->product_id])}}" method="GET">
                                                @csrf
												<div class="quality-button">
													<input name="quantity" type="number" min="1" value="1">
                                                    <input name="product_id" class="qty" type="hidden" value="{{$product_detail->product_id}}">
												</div>
                                                <button>Thêm vào giỏ hàng</button>
											</form>
										</div>
										<div class="product-social-links">
											<div class="product-addto-links">
												<!-- <a href="#"><i class="fa fa-heart"></i></a>
												<a href="#"><i class="fa fa-pie-chart"></i></a>
												<a href="#"><i class="fa fa-envelope-o"></i></a> -->
											</div><br>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- product-main-area-end -->
						<!-- product-info-area-start -->
						<div class="product-info-area mt-80">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#Details" data-toggle="tab">Thông tin chi tiết</a></li>
							</ul>
							<div class="tab-content">
                                <div class="tab-pane active" id="Details">
                                    <div class="valu">
                                    <ul>
                                        <li><i class="fa fa-circle"></i>Nhà cung cấp: <a href="#">{{$product_detail->suppliers->supplier_name}}</a></li>
                                        <li><i class="fa fa-circle"></i>Nhà xuất bản: <a href="#">{{$product_detail->publishers->publisher_name}}</a></li>
                                        <li><i class="fa fa-circle"></i>Tác giả: <a href="#">{{$product_detail->authors->author_name}}</a></li>
                                        <li><i class="fa fa-circle"></i>Danh mục: <a href="#">{{$product_detail->categories->category_name}}</a></li>
                                        <li><i class="fa fa-circle"></i>Thể loại: <a href="#">{{$product_detail->genres->genre_name}}</a></li>
                                    </ul><br><br>
                                    <p>Giới thiệu sản phẩm: {{$product_detail->product_content}} </p>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="Reviews">
                                    <div class="valu valu-2">
                                        <div class="section-title mb-20 mt-20">
                                            <h2>Bình luận</h2>
                                        </div>
                                        <form  method="POST">
                                        @csrf
                                        <div class="review-form">
                                            <div class="single-form">
                                                <label>Email</label><br><br>
                                                <input type="text" name="email" />
                                                @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="single-form ">
                                                <label>Tên </label><br><br>
                                                    <input type="text" name="name"/>
                                                    @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="single-form">
                                                <label>Nội dung</label><br><br>
                                                <textarea name="content" cols="10" rows="7"></textarea>
                                                @error('content')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="review-form-button">
                                            <button type="submit"> Bình luận </button>
                                        </div>
                                    </form>

                                    <div >
                                    @foreach($comments as $value)
										<ul>
                                            <li> {{$value->com_name}} <br><br> {{$value->created_at}}  <br><br>{{$value->com_content}} </li>
                                        </ul>
                                    @endforeach
									</div>

                                    </div>
                                </div>


						</div>
						<!-- product-info-area-end -->
						<!-- new-book-area-start -->

						<div class="new-book-area mt-60">
							<div class="section-title text-center mb-30">
								<h3>Sản phẩm tương tự</h3>
							</div>

                        <form action="">
							<div class="tab-active-2 owl-carousel">
								<!-- single-product-start -->
                                @foreach($product_genre as $key => $pro_gen)
								<div style="height: 400px;" style="width: 300px;" class="product-wrapper">
									<div class="product-img">
                                        <div>
											<img style="height: 270px;" style="width: 150px;" src="/uploads/product/{{$pro_gen->product_image}}" alt="book" class="primary" />
                                        </div>
										<div class="quick-view">
                                            <a class="action-view" href="{{route('list-product-detail', $pro_gen['product_id'])}}" data-target="#productModal" data-toggle="modal" title="Chi tiết">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                            @if($pro_gen->promotional_price == 0)
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
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">{{$pro_gen->product_name}}</a></h4>
										<div class="product-price">
											<ul>
                                                @if($pro_gen->promotional_price == 0)
                                                <li>{{number_format($pro_gen->product_price)}} vnđ</li>
                                                @else
                                                <li>{{number_format($pro_gen->promotional_price)}} vnđ</li>
												<li class="old-price" >{{number_format($pro_gen->product_price)}} vnđ</li>
                                                @endif
											</ul>
										</div>
									</div>

									<div class="product-link">
										<div class="product-button">
											<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
									</div>

								</div>
                                @endforeach
								<!-- single-product-end -->
							</div>
                            </form>
						</div>

						<!-- new-book-area-start -->
					</div>

					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="shop-left">
							<div class="left-title mb-20">
								<h4>Sản phẩm khác</h4>
							</div>
							<div class="random-area mb-30">
								<div class="product-active-2 owl-carousel">

                                @foreach($product_other as $key => $pro_other)
									<div class="product-total-2">
										<div class="single-most-product bd mb-18">
											<div class="most-product-img">
												<a href="{{route('list-product-detail', $pro_other['product_id'])}}"><img src="/uploads/product/{{$pro_other->product_image}}" alt="book" /></a>
											</div>
											<div class="most-product-content">
												<div class="product-rating">
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4>{{$pro_other->product_name}}</h4>
												<div class="product-price">
													<ul>
                                                    @if($pro_other->promotional_price == 0)
														<li>{{number_format($pro_other->product_price)}} vnđ</li>
                                                    @else
														<li>{{number_format($pro_other->product_price)}} vnđ</li>
                                                        <li class="old-price">{{number_format($pro_other->product_price)}} vnđ</li>
                                                    @endif
													</ul>
												</div>
											</div>
										</div>
									</div>
                                @endforeach
								</div>
							</div>
							<div class="banner-area mb-30">
								<div class="banner-img-2">
									<a href="#"><img src="/frontend/img/banner/33.jpg" alt="banner" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
