@extends('page-layout')
@section('content')

<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">shop</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->

		<!-- shop-main-area-start -->
		<div class="shop-main-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="shop-left">
							<div class="section-title-5 mb-30">
								<h2>Gợi ý mua</h2>
							</div>
							<div class="left-title mb-20">
								<h4>Thể loại</h4>
							</div>
                            @foreach($genre as $gen)
							<div class="left-menu mb-30">
								<ul>
									<li><a href="{{route('list-genre-product', $gen->genre_id)}}">{{$gen->genre_name}}</a></li>
								</ul>
							</div>
                            @endforeach
						</div>
					</div>

					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div class="category-image mb-30">
							<a href="#"><img src="frontend/img/banner/32.jpg" alt="banner" /></a>
						</div>

						<div class="section-title-5 mb-30">
							<h2>Book</h2>
						</div>

						<!-- tab-area-start -->

						<div class="tab-content">
							<div class="tab-pane active" id="th">
							    <div class="row">
                                @foreach($list_hot_product as $key => $list_hot_pro)
							        <div class="col-lg-3 col-md-4 col-sm-6">
							            <!-- single-product-start -->
                                        <div style="height: 400px;" style="width: 300px;" class="product-wrapper mb-40">
                                            <div class="product-img">
                                                <div>
                                                    <img style="height: 270px;" style="width: 150px;" src="/uploads/product/{{$list_hot_pro->product_image}}" alt="book" class="primary" />
                                                </div>
                                                <div class="quick-view">
                                                    <a class="action-view" href="{{route('list-product-detail', $list_hot_pro['product_id'])}}" data-target="#productModal" data-toggle="modal" title="Chi tiết">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="product-flag">
                                                    <ul>
                                                        @if($list_hot_pro->promotional_price == 0)
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
                                                <h4>{{$list_hot_pro->product_name}}</h4>
                                                <div class="product-price">
                                                    <ul>
                                                    @if($list_hot_pro->promotional_price == 0)
                                                        <li>{{ number_format($list_hot_pro->product_price)}} vnđ </li>
                                                    @else
                                                        <li>{{ number_format($list_hot_pro->promotional_price)}} vnđ </li>
                                                        <li class="old-price">{{ number_format($list_hot_pro->product_price)}} vnđ </li>
                                                    @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-link">
                                                <div class="product-button">
                                                    <a href="{{route('add-cart', $list_hot_pro->product_id)}}" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
							        </div>
                                    @endforeach
							    </div>
							</div>
						</div>
						<!-- tab-area-end -->
						<!-- pagination-area-start -->
						<div class="pagination-area mt-50">
							<div class="page-number">
								<ul>

									<li>{{$list_hot_product->links()}}</li>

								</ul>
							</div>
						</div>
						<!-- pagination-area-end -->
					</div>
				</div>
			</div>
		</div>
		<!-- shop-main-area-end -->

@endsection
