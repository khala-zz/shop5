@extends('frontend.layouts.master')
@section('title')
<title>Thành viên</title>
@endsection

@section('content')
<div class="main-content" id="MainContent">
<section id="breadcrumbs" class=" breadcrumbbg">

    <div class="breadcrumbwrapper">
        <div class="container">
          
            <nav>
                <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemlistelement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{ url('/') }}" title="Quay lại trang chủ" itemprop="item">
                      <span itemprop="name">Trang chủ</span>
                    </a>
                    <meta itemprop="position" content="1" />
                    </li>
                  
                    <li class="active" itemprop="itemlistelement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="item"><span itemprop="name">Đăng nhập</span></span>
                    <meta itemprop="position" content="2" />
                    </li>
                  
                </ol>
            </nav>
        </div>
    </div>
</section>

<div class="container">
    <div class="wraper-inner">
        <h1 class="page-title">Thành viên đăng nhập</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="formaccount formlogin">
                    @if($errors)

                        {!! $errors->first('email', '<p class="help-block" style="color:red;">:message</p>') !!}
                        {!! $errors->first('password', '<p class="help-block" style="color:red;">:message</p>') !!}
                               
                    @endif
                    <div id="CustomerLoginForm" class="form-vertical block">
                        <form method="post" action="{{ route('front-login') }}"  accept-charset="UTF-8">

                            @csrf
                            <h3 class="block-title">Đăng nhập</h3>

                            <label for="CustomerEmail">Email</label>
                            <input type="email" name="email" placeholder="Email *" value = "{{old('email')}}" required autofocus>

                          
                            <label for="CustomerPassword">Mật khẩu</label>
                            <input type="password"  name = "password" id="password" placeholder="Mật khẩu *" required>
                          

                            <div class="submit">

                                <input type="submit" class="btn" value="Đăng nhập">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="formaccount formlogin block">
                    <h3 class="block-title">Đăng kí tài khoản</h3>
                    <div class="formcontent">
                        <div class="registerdescription">
                          <p>Đăng kí tài khoản miễn phí. Việc đăng kí nhanh và dễ dàng. Khi đăng kí bạn có thể đặt hàng từ shop và nhiều mã giảm giá. Để bắt đầu đăng kí tài khoản từ bây giờ.</p>
                        </div>
                        <div class="submit">
                          <a class="btn default" href="{{ url('front-register') }}">
                            <i class="fa fa-user-plus" aria-hidden="true"></i><span>Đăng kí tài khoản</span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br />

@endsection

