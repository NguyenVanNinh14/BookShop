@extends('page-layout')
@section('content')

<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- checkout-area-start -->
		<div class="checkout-area mb-70">
			<div class="container">
				<div class="row">
					<form action="{{route('checkout')}}" method="POST">
                    @csrf
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="checkbox-form">
								<h3>Chi tiết hóa đơn</h3>
								<div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list">
											<label>Họ và tên</label>
											<input type="text" name="order_name" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
										<div class="checkout-form-list">
											<label>Email <span class="required">*</span></label>
											<input type="text" name="order_email" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="checkout-form-list">
											<label>phone <span class="required">*</span></label>
											<input type="text" name="order_phone" placeholder="">
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list">
											<label>Địa chỉ</label>
											<input type="text" name="order_address" placeholder="">
										</div>
									</div>
                                    <div class=" col-lg-12">
										<div class="country-select">
											<label>Thanh toán <span class="required">*</span></label>
											<select name="order_method">
											  <option value="0" >COD</option>
											  <option value="1" >Online</option>
											</select>
										</div>
									</div>
                                    <div class="order-notes">
										<div class="checkout-form-list">
											<label>Ghi chú</label>
											<textarea name="order_note" placeholder="" rows="10" cols="30" id="checkout-mess"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="your-order">
								<h3>Đơn đặt hàng</h3>
								<div class="your-order-table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-name">Sản phẩm</th>
												<th class="product-total">Giá tiền</th>
											</tr>
										</thead>
                                        @if($cart_data)
                                        @foreach($cart_data as $value)
										<tbody>
											<tr class="cart_item">
												<td class="product-name">
                                                {{$value->name}} <strong class="product-quantity"> × {{$value['quantity']}}</strong>
												</td>
												<td class="product-total">
													<span class="amount">{{number_format($value->price * $value->quantity)}} vnđ</span>
												</td>
											</tr>

										</tbody>
                                        @endforeach
                                        @endif
                                        @if($cart_data)
                                        <tfoot>
											<tr class="order-total">
												<th>Tổng tiền </th>
												<td><strong><span class="amount">{{ number_format($cart_subtotal)}} vnđ</span></strong>
												</td>
											</tr>
										</tfoot>
                                        @endif
									</table>
								</div>
								<div class="payment-method">
									<div class="payment-accordion">
										<div class="collapses-group">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											</div>
										</div>
									</div>
									<div class="order-button-payment">
										<input type="submit" value="Đặt hàng ">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

@endsection
