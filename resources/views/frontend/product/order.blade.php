@extends('frontend.layouts.master')
@section('title')
<title>Shop | Order</title>
@endsection

@section('content')

<div class="main-content" id="MainContent">
    <div  class="shopify-section mtb-60">
        <div class="container" data-section-id="cart-template" data-section-type="cart-template">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="order-message">
						Cám ơn, Đơn hàng của bạn đã được tiếp nhận.
					</div>
				</div>
			</div>

			<div class="order-results  pb-8">
				<div class="overview-item">
					<span>Mã đơn hàng</span>
					<strong>{{Session::get('order_id')}}</strong>

				</div>
				<div class="overview-item">
					<span>Tình trạng</span>
					<strong>Đang xử lý</strong>
				</div>
				<div class="overview-item">
					<span>Ngày</span>
					<strong>{{date('d-m-Y')}}</strong>
				</div>
				<div class="overview-item">
					<span>Tổng tiền thanh toán</span>
					<strong>{{Session::get('grand_total')}}</strong>
				</div>
				<div class="overview-item">
					<span>Phương thức thanh toán</span>
					<strong>{{$payment_value}}</strong>
				</div>
			</div>

			<h2 class="title-simple text-left">Thông tin đơn hàng</h2>
			
			<div class="order-details">
				<table class="order-details-table">
					<thead>
						<tr class="summary-subtotal">
							<td>
								<h3 class="summary-subtitle">Sản phẩm</h3>
							</td>	
							<td></td>		
						</tr>
					</thead>
					<tbody>
						<?php $total_amount = 0; ?>
						@foreach($userCart as $item)
						<tr>
							<td class="product-name">{{$item -> product_name}} <span> <b>x</b> {{$item -> quantity}}</span>&nbsp;({{$item -> product_color}}&nbsp;|&nbsp;{{$item -> size}})</td>
							<td class="product-price">{{formatMoney($item -> price * $item -> quantity)}}</td>
						</tr>
						<?php $total_amount = $total_amount + ($item -> price * $item -> quantity);?>
						@endforeach

						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Tổng tiền:</h4>
							</td>
							<td class="summary-subtotal-price">{{formatMoney($total_amount)}}</td>												
						</tr>

						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Phương thức thanh toán:</h4>
							</td>
							<td class="summary-subtotal-price">{{$payment_value}}</td>												
						</tr>

						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Giảm giá</h4>
							</td>
							<td>
								<p class="summary-total-price">
									@if(!empty(Session::get('CouponAmount')))
									{{formatMoney(Session::get('CouponAmount'))}}
									@else
									0 đ
									@endif
								</p>
							</td>												
						</tr>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Tổng tiền thanh toán</h4>
							</td>
							<td>
								<p class="summary-total-price">{{formatMoney(Session::get('grand_total'))}}</p>
							</td>												
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-lg-6 address-info pb-8 mb-6">
					<h2 class="title title-simple text-left pt-8 mb-2">Địa chỉ thanh toán</h2>

					<p class="address-detail pb-2">
						{{ $userDetails -> name }}<br>
						{{ $userDetails -> mobile }}<br>
						{{ $userDetails -> address }}<br>
						{{ $userDetails -> city }}<br>
						Quận/huyện <br />
						{{ $userDetails -> state }}
					</p>
					<p class="email">{{ $userDetails -> email }}</p>
				</div>

				@if(!empty($shipping_details -> name) && !empty($shipping_details -> address))
				<div class="col-lg-6 address-info pb-8 mb-6">
					<h2 class="title title-simple text-left pt-8 mb-2">Địa chỉ giao hàng</h2>

					<p class="address-detail pb-2">
						{{ $shipping_details -> name }}<br>
						{{ $shipping_details -> mobile }}<br>
						{{ $shipping_details -> address }}<br>
						{{ $shipping_details -> city }}<br>
						Quận/huyện <br />
						{{ $shipping_details -> state }}
					</p>
					<p class="email">{{ $shipping_details -> email }}</p>
				</div>
				@endif
			</div>
			<div class="cart-shiping-update">
				<br>
				<a href="{{url('/cua-hang')}}" class="btn btn-icon-left btn-back btn-md mb-4"><i class="d-icon-arrow-left"></i> Tiếp tục mua sắm</a>
			</div>
		
		</div>
	</div>

{{Session::forget('grand_total')}}
{{Session::forget('order_id')}}
<?php 
	//DB::table('cart') -> where('user_email',Auth::user() -> email) ->delete();
DB::table('cart') -> where('session_id',Session::get('session_cart_id')) ->delete();
?>

@endsection


