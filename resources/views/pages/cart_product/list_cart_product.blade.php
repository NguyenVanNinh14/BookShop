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
		<!-- entry-header-area-start -->
		<div class="entry-header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="entry-header-title">
							<h2>Thông tin giỏ hàng</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area-end -->
		<!-- cart-main-area-start -->
		<div class="cart-main-area mb-70">
			<div class="container">

				<div class="row">
					<div class="col-lg-12" id="list-cart">
						<form action="#">
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Ảnh</th>
											<th class="product-name">Tên sản phẩm</th>
											<th class="product-price">Giá</th>
											<th class="product-quantity">Số lượng</th>
											<th class="product-subtotal">Tổng tiền</th>
                                            <th class="product-remove">Cập nhật</th>
											<th class="product-remove">Xóa </th>
										</tr>
									</thead>

                                    @if($cart_data)
                                        @foreach($cart_data as $value)
									<tbody>
										<tr>
											<td class="product-thumbnail"><img src="/uploads/product/{{$value->attributes->avatar}}" alt="man" /></td>
											<td class="product-name" style="font-size:20px ;">{{$value->name}}</td>
                                            <td class="product-price"><span class="amount">{{number_format($value->price)}} vnđ </span></td>
                                            <td class="product-quantity"><input min="1" name="quantity" class="qty" type="number" value="{{$value['quantity']}}"></td>
											<td class="product-subtotal">{{number_format($value->price * $value->quantity)}} vnđ </td>
                                            <td class="product-remove"><a class="update-cart" data-id="{{$value->id}}"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></td>
                                            <td class="product-remove"><a onclick="return confirm('Bạn có chắc chắn sẽ xoá')" href="{{route('delete-item-cart', [$value->id])}}"><i class="fa fa-times"></i></a></td>
										</tr>
									</tbody>
                                    @endforeach
                                    @endif

								</table>
							</div>
						</form>
					</div>

				</div>

				<div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <div class="buttons-cart mb-30">
                            <ul>
                                <li><a href="{{route('index')}}">Tiếp tục mua </a></li>
                            </ul>
                        </div>
                        <!-- <div class="coupon">
                            <h3>Coupon</h3>
                            <p>Enter your coupon code if you have one.</p>
                            <form action="#">
                                <input type="text" placeholder="Coupon code">
                                <a href="#">Apply Coupon</a>
                            </form>
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cart_totals">
                            <h2>Thanh toán</h2><br>
                            <table>

                            </table>
                            <div class="wc-proceed-to-checkout">
                                <a href="{{route('show-checkout')}}">Mua hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- cart-main-area-end -->
<script>
    $(".update-cart").click(function(){
        let id = $(this).data('id')
        let qty = $(".qty").val()
        $.ajax({
        url:   "{{ route('update-list-item-cart') }}",
        type: "POST",
        dataType:"JSON",
        data: {id: id, qty:qty},
          headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
            },
        success: function(data){
            console.log(data)
            location.reload();
        },
        error:function(err) {
            location.reload();
                console.log(err);
            }
      });
    })
</script>
@endsection
