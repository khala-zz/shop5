@extends('frontend.layouts.master')
@section('title')
<title>Đăng kí</title>
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
            <span itemprop="item"><span itemprop="name">Đăng kí tài khoản</span></span>
            <meta itemprop="position" content="2" />
          </li>
          
        </ol>
      </nav>
    </div>
  </div>
</section>

<div class="container">
  <div class="wraper-inner">
    <div class="row">

      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-vertical">
        <div class="formaccount formlogin">
            <form method="post" action="{{ route('front-register') }}"  accept-charset="UTF-8">
                @csrf

                <h1 class="page-title">Đăng kí tài khoản</h1>

                

                <label for="Name">Tên</label>
                <input type="text" name="name"  autofocus placeholder="Tên *" value = "{{old('name')}}"required>
                {!! $errors->first('name', '<p class="help-block" style="color:red;">:message</p>') !!}
                

                <label for="Email">Email</label>
                <input type="email" name="email"  placeholder="Email *" value = "{{old('email')}}" required >
                {!! $errors->first('email', '<p class="help-block" style="color:red;">:message</p>') !!}

                <label for="CreatePassword">Mật khẩu</label>
                <input type="password" name="password" placeholder="Mật khẩu *" required>
                {!! $errors->first('password', '<p class="help-block" style="color:red;">:message</p>') !!}

                <label for="CreatePassword">Nhập lại Mật khẩu</label>
                <input  type="password" name = "password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu *" required>
                {!! $errors->first('password_confirmation', '<p class="help-block" style="color:red;">:message</p>') !!}

                <p class="text-center cr_acc">
                  <input type="submit" value="Đăng kí" class="btn">
                </p>

            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br />

@endsection

