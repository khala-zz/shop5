@extends('frontend.layouts.master')
@section('title')
<title>Tài khoản</title>
@endsection

@section('content')

 <div class="main-content" id="MainContent">
    <!-- Breadcrumb Area start -->
    <section id="breadcrumbs" class=" breadcrumbbg">

        <div class="breadcrumbwrapper">
            <div class="container">      
                <div class="breadcrumbtitle">       
                    <h3>Trang tài khoản</h3>
                </div>      
                <nav>
                    <ol class="breadcrumb" >
                        <li>
                            <a href="{{ url('/') }}" title="Back to the frontpage" >
                              <span >Trang chủ</span>
                          </a>
                          
                        </li>


                        <li class="active" >
                            <span >Tài khoản</span>
                            
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- account area start -->
    <div class="checkout-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <!--hien thi thong bao -->
                        @if(Session::has('flash_message_error'))
                        <div class="alert alert-danger alert-dark alert-round alert-inline">

                            {!! session('flash_message_error')!!}
                            <button type="button" class="btn btn-link btn-close">
                                <i class="d-icon-times"></i>
                            </button>
                        </div>
                        @endif

                        @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-dark alert-round alert-inline">
                            <h4 class="alert-title">Thành công :</h4>
                            {!! session('flash_message_success')!!}
                            <button type="button" class="btn btn-link btn-close">
                                <i class="d-icon-times"></i>
                            </button>
                        </div>
                        @endif
                        <!-- end hien thi thong bao -->
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>1 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Chỉnh sửa thông tin tài khoản </a></h3>
                                </div>
                                <!--thong tin tai khoan -->
                                <div id="my-account-1" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <form method = "post" action="{{url('change-password')}}" class="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="myaccount-info-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>Thông tin chi tiết</h4>
                                                    <h5>Nhập thông tin cần chỉnh sửa</h5>
                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <input type="hidden" name="old_pass" value="{{$userDetails -> password}}">
                                                            <label>Tên *</label>
                                                            <input type="text" class="form-control mb-0" name="name" required value="{{$userDetails -> name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Email*</label>
                                                            <input type="email" class="form-control" name="email" required value="{{$userDetails -> email}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Mật khẩu hiện tại (Để trống nếu bạn không muốn thay đổi)</label>
                                                            <input type="password" class="form-control" name="current_password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Mật khẩu mới(Để trống nếu bạn không muốn thay đổi)</label>
                                                            <input type="password" class="form-control" name="new_password">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12">
                                                        @if(!empty($userDetails->image))
                                                        <img src="{{ url('uploads/users/' . $userDetails->image) }}" width="200" height="180"/>
                                                        @endif
                                                        <div class="billing-info {{ $errors->has('image') ? 'has-error' : ''}}">
                                                            <label for="image" class="control-label">{{ 'Hình ảnh' }}</label>
                                                            <input class="form-control" name="image" type="file" id="image" >
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="billing-back-btn">

                                                    <div class="billing-btn">
                                                        <button type="submit">Cập nhật</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end thong tin tai khoan -->
                            </div>
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>2 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Đơn hàng của bạn </a></h3>
                                </div>
                                <div id="my-account-2" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table" >
                                                <thead>
                                                    <tr>
                                                        <th scope="col" >Mã đơn hàng</th>
                                                        <th scope="col">Sản phẩm</th>
                                                        <th scope="col">Phương thức thanh toán</th>
                                                        <th scope="col">Tổng tiền thanh toán</th>
                                                        <th scope="col">Ngày đặt hàng</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($orders as $order)
                                                    <tr style="border-bottom: 1px solid #eee;">
                                                        <td scope="row" >{{$order -> ma_order}}</td>
                                                        <td>
                                                            @foreach($order -> orders as $pro)


                                                            <a href="{{ url('san-pham/'.slugify($pro -> product_name,'-').'/'.$pro -> product_id) }}" >{{$pro -> product_name}}({{$pro -> product_qty}})</a>
                                                            <br />

                                                            @endforeach    
                                                        </td>
                                                        <td>{{$order -> payment_method}}</td>
                                                        <td>{{$order -> total_price}}</td>
                                                        <td>{{$order -> created_at}}</td>

                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="5">
                                                            <p class=" b-2">Chưa có đơn hàng nào</p>
                                                            <div class="cart-shiping-update">
                                                                <a href="{{url('cua-hang')}}" >Mua sắm</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforelse()
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- thong tin dai chi -->
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>3 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-3">Chỉnh sửa thông tin địa chỉ </a></h3>
                                </div>
                                <div id="my-account-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper">

                                            <div class="row">

                                                <div class="col-lg-6 col-md-6">

                                                    <form method = "post" action="{{url('change-address-ship')}}"  >
                                                        @csrf

                                                        <h4>Địa chỉ giao hàng</h4>
                                                        <br />
                                                        <div class="billing-info">
                                                            <label>Tên *</label>
                                                            <input type="text" class="form-control mb-0" name="name" required value="{{isset($address_ship -> name)?$address_ship -> name:''}}">
                                                        </div>

                                                        <div class="billing-info">
                                                            <label>Email*</label>
                                                            <input type="email" class="form-control" name="email" required value="{{isset($address_ship -> user_email)?$address_ship -> user_email:''}}">
                                                        </div>

                                                        <div class="billing-info">
                                                            <label>Điện thoại *</label>
                                                            <input type="text" class="form-control" name="mobile" required value="{{isset($address_ship -> mobile)?$address_ship -> mobile:''}}">
                                                        </div>


                                                        <div class="billing-info">
                                                            <label>Tỉnh/Thành phố</label><br/>

                                                            <select class="form-control" name="city">
                                                                <option value="0">Chọn thành phố/tỉnh</option>
                                                                @foreach($citys as $city)
                                                                @if(isset($address_ship -> city))
                                                                <option 
                                                                value="{{ $city -> name }}" 
                                                                {{ $city->name  == $address_ship -> city ?"selected":""}}>
                                                                {{ $city -> name }}
                                                            </option>
                                                            @else
                                                            <option 
                                                            value="{{ $city -> name }}" 
                                                            >
                                                            {{ $city -> name }}
                                                        </option>
                                                        @endif
                                                        @endforeach       
                                                    </select>
                                                    <br /><br />
                                                </div>

                                                <div class="billing-info">
                                                    <label>Quận/huyện</label>
                                                    <input type="text" class="form-control mb-0" name="state" required value="{{isset($address_ship -> state)?$address_ship -> state:''}}">
                                                </div>

                                                <div class="billing-info">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control mb-0" name="address" required value="{{isset($address_ship -> address)?$address_ship -> address:''}}">

                                                </div>

                                                <input type="hidden" name="address_id" value="{{isset($address_ship -> id)?$address_ship -> id:''}}">
                                                <div class="billing-back-btn">

                                                    <div class="billing-btn">
                                                        <button type="submit">Cập nhật</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="col-lg-6 col-md-6" style="border-left: 1px solid #eaeaea; ">
                                            <form method = "post" action="{{url('change-address')}}"  >
                                                @csrf

                                                <h4>Địa chỉ thanh toán</h4>
                                                <br />
                                                <div class="billing-info">
                                                    <label>Tên *</label>
                                                    <input type="text" class="form-control mb-0" name="name" required value="{{$userDetails -> name}}">
                                                </div>

                                                <div class="billing-info">
                                                    <label>Email*</label>
                                                    <input type="email" class="form-control" name="email" required value="{{$userDetails -> email}}">
                                                </div>

                                                <div class="billing-info">
                                                    <label>Điện thoại *</label>
                                                    <input type="text" class="form-control" name="mobile" required value="{{$userDetails -> mobile}}">
                                                </div>

                                                <div class="billing-info">
                                                    <label>Tỉnh/Thành phố</label>
                                                    <br />
                                                    <select class="form-control" name="city">
                                                        <option value="0">Chọn thành phố/tỉnh</option>
                                                        @foreach($citys as $city)
                                                        <option 
                                                        value="{{ $city -> name }}" 
                                                        {{ $city->name  == $userDetails -> city ?"selected":""}}>
                                                        {{ $city -> name }}</option>
                                                        @endforeach       
                                                    </select>
                                                    <br /><br />
                                                </div>

                                                <div class="billing-info">
                                                    <label>Quận/huyện</label>
                                                    <input type="text" class="form-control mb-0" name="state" required value="{{$userDetails -> state}}">
                                                </div>

                                                <div class="billing-info">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control mb-0" name="address" required value="{{$userDetails -> address}}">

                                                </div>


                                                <div class="billing-back-btn">

                                                    <div class="billing-btn">
                                                        <button type="submit">Cập nhật</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default single-my-account">
                        <div class="panel-heading my-account-title">
                            <h3 class="panel-title"><span>4 .</span> <a href="{{ url('/front-logout') }}">Đăng xuất</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- account area end -->
@endsection

