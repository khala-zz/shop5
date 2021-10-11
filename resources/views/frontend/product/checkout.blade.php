@extends('frontend.layouts.master')
	@section('title')
		<title>Shop | Checkout</title>
	@endsection
	

	@section('content')
	    <div class="main-content" id="MainContent">
            <div id="shopify-section-cart-template" class="shopify-section">
                <div class="container" data-section-id="cart-template" data-section-type="cart-template">
                    <div class="page-cart">
                        <h2 class="page-title">Trang thanh toán</h2>
                    </div>
                    <form method = "post" action="{{url('/checkout')}}" class="form" id="form-checkout">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="billing-info-wrap">
                                    <h3>Thông tin thanh toán</h3>
                                    <!-- thong tin thanh toan -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                 <label>Tên *</label>
                                                 <input type="text" class="form-control" name="billing_name" required value="{{$userDetails -> name}}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Email *</label>
                                                <input type="email" class="form-control"  name="billing_email" required value="{{$userDetails -> email}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Điện thoại *</label>
                                                <input type="text" class="form-control" name="billing_mobile" required value="{{$userDetails -> mobile}}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="billing-select mb-20px">
                                                <label>Tỉnh/Thành phố</label>
                                                <select class="form-control" name="billing_city">
                                                    <option value="0">Chọn thành phố/tỉnh</option>
                                                    @foreach($citys as $city)
                                                    <option 
                                                    value="{{ $city -> name }}" 
                                                    {{ $city->name  == $userDetails -> city ?"selected":""}}>
                                                    {{ $city -> name }}</option>
                                                    @endforeach       
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Quận/huyện</label>
                                                <input type="text" class="form-control" name="billing_state" required value="{{$userDetails -> state}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control mb-0" name="billing_address" required value="{{$userDetails -> address}}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- end thong tin thanh toan -->
                                   
                                    
                                    
                                    <div class="checkout-account mt-25">
                                        <input class="checkout-toggle" type="checkbox" name="different_address"/>
                                        <label>Giao hàng đến địa chỉ khác?</label>
                                    </div>
                                    <div class="different-address open-toggle mt-30">
                                        <div class="row">
                                            <!-- dia chi khac-->
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20px">
                                                    <label>Tên *</label>
                                                    <input type="text" class="form-control" name="shipping_name"  value="{{empty($shipping_details -> name) ?' ':$shipping_details -> name}}"  />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20px">
                                                    <label>Email *</label>
                                                    <input type="email" class="form-control"  name="shipping_email"  value="{{empty($shipping_details -> user_email)?' ':$shipping_details -> user_email}}"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20px">
                                                    <label>Điện thoại *</label>
                                                    <input type="text" class="form-control" name="shipping_mobile" value="{{empty($shipping_details -> mobile)?' ':$shipping_details -> mobile}}"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-select mb-20px">
                                                    <label>Tỉnh/Thành phố</label>
                                                    <select class="form-control" name="shipping_city">
                                                        <option value="0">Chọn thành phố/tỉnh</option>
                                                        @foreach($citys as $city)
                                                        <option value="{{ $city -> name }}" 
                                                            {{!empty($shipping_details -> city) && ($shipping_details -> city == $city -> name)?'selected':' '}}>
                                                        {{ $city -> name }}
                                                        </option>
                                                        @endforeach       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20px">
                                                    <label>Quận/huyện</label>
                                                    <input type="text" class="form-control" name="shipping_state" value="{{!empty($shipping_details -> state) ?$shipping_details -> state:' '}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20px">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control mb-0" name="shipping_address" value="{{!empty($shipping_details -> address) ?$shipping_details -> address:' '}}">
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="your-order-area">
                                    <h3>Đơn hàng</h3>
                                    <div class="your-order-wrap gray-bg-4">
                                        <div class="your-order-product-info">
                                            <div class="your-order-top">
                                                <ul>
                                                    <li>Sản phẩm</li>
                                                    <li>Tổng</li>
                                                </ul>
                                            </div>
                                            <div class="your-order-middle">
                                                <?php $total_amount = 0; ?>
                                                <ul>
                                                    <!-- product cart -->
                                                    @foreach($userCart as $item)
                                                        <li><span class="order-middle-left">{{$item -> product_name}} X {{$item -> quantity}}</span> <span class="order-price">{{formatMoney($item -> price * $item -> quantity)}} </span></li>
                                                    
                                                    <?php $total_amount = $total_amount + ($item -> price * $item -> quantity);?>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="your-order-bottom">
                                                <ul>
                                                    <li class="your-order-shipping">Giao hàng</li>
                                                    <li>Miễn phí</li>
                                                </ul>
                                            </div>
                                            <!-- coupon -->
                                            <div class="your-order-bottom">
                                                <ul>
                                                    <li class="your-order-shipping">Mã giảm giá</li>
                                                    <li>
                                                        @if(!empty(Session::get('CouponAmount')))
                                                            {{formatMoney(Session::get('CouponAmount'))}} 
                                                        @else
                                                            0 đ
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="your-order-total">
                                                <ul>
                                                    <li class="order-total">
                                                        Tổng tiền thanh toán
                                                    </li>
                                                    <li class="total-amount-checkout">
                                                        {{formatMoney($total_amount - Session::get('CouponAmount'))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="Place-order mt-25">
                                        <a class="btn-hover" href="#" onclick="document.getElementById('form-checkout').submit(); return false;">Đặt hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="grand_total" value="{{$total_amount - Session::get('CouponAmount')}}">
                        <input type="hidden" name="paymentMethod" value="Sau khi nhận hàng" id="paymentMethod">
                    </form>
                </div>
            </div>
            
           
	

	@endsection

	
	