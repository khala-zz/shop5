@extends('frontend.layouts.master')
@section('title')
<title>Shop | Giỏ hàng</title>
@endsection
@section('content')
<div class="main-content" id="MainContent">
    <div id="shopify-section-cart-template" class="shopify-section">
        <div class="container" data-section-id="cart-template" data-section-type="cart-template">
            <div class="page-cart">
              <h2 class="page-title">Giỏ hàng của bạn</h2>
            </div>
            <!--hien thi thong bao -->
            @if(Session::has('flash_message_error'))
                <div class="alert alert-dark alert-danger alert-round alert-inline">
                    
                    {!! session('flash_message_error')!!}
                    <button type="button" class="btn btn-link btn-close">
                        <i class="d-icon-times"></i>
                    </button>
                </div>
            @endif

            @if(Session::has('flash_message_success'))
                <div class="alert alert-dark alert-success alert-round alert-inline">
                    
                    {!! session('flash_message_success')!!}
                    <button type="button" class="btn btn-link btn-close">
                        <i class="d-icon-times"></i>
                    </button>
                </div>
            @endif
            <!-- end hien thi thong bao -->
            <form action="{{route('update.cart')}}" method="post" novalidate="" class="cart" id="updateQty">
                @csrf
                <table>
                    <thead class="cart__row cart__header">
                        <tr>
                            <th colspan="2">Sản phẩm</th>
                            <th>Giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-right">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- show du lieu cart -->
                        <?php 
                            //khai báo biến tổng để tính tổng
                            $total_amount = 0;
                            
                        ?>
                        @foreach($userCart as $index => $item)
                            
                            <input type="hidden" name="cart_id[]" value="{{$item -> id}}">
                            <tr class="cart__row border-bottom line{{$index + 1}} cart-flex {{$index==0?'border-top':''}}">
                                <td class="cart__image-wrapper cart-flex-item">
                                    <a href="{{ route('product.detail',['slug' => slugify($item -> product_name,'-'),'id' => $item -> product_id]) }}">
                                      <img class="cart__image" src="{{ asset('uploads/products-daidien/'.$item -> image) }}" alt="{{$item -> product_name}}">
                                    </a>
                                </td>
                                <td class="cart__meta small--text-left cart-flex-item">
                                    <div class="list-view-item__title">
                                        <a href="{{ route('product.detail',['slug' => slugify($item -> product_name,'-'),'id' => $item -> product_id]) }}">
                                            {{$item -> product_name}}
                                        </a>
                                    </div>
                                    <p >
                                      <a href="{{url('/cart/delete-product/'.$item -> id)}}" class="btn btn--small btn--secondary cart__remove">Xóa</a>
                                    </p>
                                </td>
                                <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money" >{{formatMoney($item -> price)}}</span>
                                    <div class="cart__edit medium-up--hide">
                                        <button type="button" class="btn btn--secondary btn--small js-edit-toggle cart__edit--active" data-target="line1">
                                            <span class="cart__edit-text--edit">Edit</span>
                                            <span class="cart__edit-text--cancel">Cancel</span>
                                        </button>
                                    </div>
                                </td>
                                <td class="cart__update-wrapper cart-flex-item text-right">
                        
                                    <div class="product-options-bottom quantity-margin-top">
                                        <div class="product-form__item product-form__item--quantity">
                                             
                                            <div class="form_qty">
                                                <input type="text" id="qty{{$index}}" name="qtybutton[]" value="{{$item -> quantity}}" min="1" class="quantity-selector">
                                                <div class="inline">
                                                    <div class="increase items" onclick="var result = document.getElementById('qty{{$index}}'); var qty = result.value; if( !isNaN( qty )) result.value++;  return false;"><i class="fa fa-angle-up"></i></div>
                                                    <div class="reduced items" onclick="var result = document.getElementById('qty{{$index}}'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;  return false;"><i class="fa fa-angle-down"></i></div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
  
                                    
                                </td>
                                <td class="text-right small--hide">
                                    <div>
                                      <span class="money" >{{formatMoney($item -> price * $item -> quantity)}}</span>
                                    </div>
                                </td>
                            </tr>
                            <!-- tinh tong -->
                            <?php $total_amount = $total_amount + ($item -> price * $item -> quantity);?>
                        @endforeach
                    </tbody>
                </table>
                <footer class="cart__footer">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 medium-up--one-half cart-note">
                            <!-- coupon -->
                            <p><span class="money" >Nhập mã khuyến mãi tại đây.</span></p>
                            <form >
                                @csrf
                                <input type="text" required="" name="coupon_code"  placeholder="Nhập mã giảm giá"/>

                                <button type="submit" formaction="{{ url('/cart/apply-coupon') }}" method='post' class="btn btn--secondary cart__update cart__continue--large  khala-btn-coupon">Gửi</button>

                            </form>
                            
                            <!-- end coupon -->
                        </div>
                        <div class="col-md-6 col-xs-12 text-right small--text-center medium-up--one-half">
                            <div>
                                <span class="cart__subtotal-title">Tổng tiền</span>
                                <span class="cart__subtotal"><span class="money" ><?php echo formatMoney($total_amount); ?></span></span>
                                <br />
                                
                                <!-- kiem tra neu có coupon thi hiện ra -->
                                @if(!empty(Session::get('CouponAmount')))

                                    <span class="cart__subtotal-title">Giảm giá</span>
                                    <span class="cart__subtotal"><span class="money" ><?php echo formatMoney(Session::get('CouponAmount')); ?></span></span>
                                    <br />    

                                    <span class="cart__subtotal-title">Tổng tiền thanh toán</span>
                                    <span class="cart__subtotal"><span class="money" ><?php echo formatMoney($total_amount - Session::get('CouponAmount')); ?></span></span>
                                @else
                                    <span class="cart__subtotal-title">Tổng tiền thanh toán</span>
                                    <span class="cart__subtotal"><span class="money" ><?php echo formatMoney($total_amount); ?></span></span>
                                @endif


                            </div>
                            <br />
                            <a href="{{ url('cua-hang') }}" class="btn btn--secondary cart__update cart__continue--large ">Tiếp tục mua sắm</a>
                           
                            <input type="submit" name="update" class="btn btn--small-wide" value="Cập nhật giỏ hàng" form="updateQty">
                            <a href="{{ url('checkout') }}" class="btn btn--secondary cart__update cart__continue--large ">Thanh toán</a>
                            
                        </div>
                    </div>
                </footer>
            </form>
        </div>
    </div>
    <br />
@endsection
