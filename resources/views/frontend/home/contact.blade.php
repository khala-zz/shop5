@extends('frontend.layouts.master')
@section('title')
<title>Liên hệ</title>
@endsection

@section('content')

<div class="main-content" id="MainContent">
    <section id="breadcrumbs" class=" breadcrumbbg">
        <div class="breadcrumbwrapper">
            <div class="container">
                <div class="breadcrumbtitle">
                    <h3>Liên hệ</h3>
                </div>
                <nav>
                    <ol class="breadcrumb" >
                        <li >
                            <a href="{{ url('/') }}" title="Quay về trang chủ" >
                              <span >Trang chủ</span>
                            </a>
                        </li>
                        <li class="active" >
                            <span >Liên hệ</span>
                        
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <div id="shopify-section-template-contact" class="shopify-section">
        <div class="container page-contact">
            <h2 class="page-title">Liên hệ chúng tôi</h2>
            <div class="row">
                <div class="contact-map-wrap col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="block-map">
                        <div class="block-content">
                            
                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=346 Ma Lo Phuong BTD A&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                               
                        </div>
                    </div>
                    <div class="contact-des">
                   Bạn có bất kỳ thắc mắc hay câu hỏi đừng ngần ngại liên hệ với chúng tôi để được giải đáp thắc mắc, cám ơn
                    </div>
                </div>
                <div class="contact-form col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- hien thi thong bao -->
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-dark alert-round alert-inline">
                            <h4 class="alert-title">Thành công :</h4>
                            {!! session('flash_message_success')!!}
                            
                        </div>
                    @endif
                    <!-- end hien thi thong bao -->
                    <div class="contact-form form-vertical">
                        <form action="{{route('contact.store')}}" method="post" id="contact_form" accept-charset="UTF-8" class="contact-form">
                            @csrf
                            <div class="grid grid--half-gutters">
                                <div class="grid__item medium-up--one-half">
                                    <label class="hidden" for="ContactFormName">Tên</label>
                                    <input type="text" id="ContactFormName" name="name" placeholder="Tên *" class="{{ $errors->has('name') ? 'error' : '' }}" required>
                                    <!-- Error -->
                                    @if ($errors->has('name'))
                                        <div class="error">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="grid__item medium-up--one-half">
                                    <label class="hidden" for="ContactFormEmail" class="">Email</label>
                                    <input type="email" id="ContactFormEmail" name="email" placeholder="Email *" autocorrect="off" autocapitalize="off"  class="{{ $errors->has('email') ? 'error' : '' }}" required >
                                    <!-- error -->
                                    @if ($errors->has('email'))
                                        <div class="error">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <label class="hidden" for="ContactFormPhone">Điện thoại</label>
                            <input type="tel" id="ContactFormPhone" name="mobile"  placeholder="Điện thoại *" pattern="[0-9\-]*" class="{{ $errors->has('mobile') ? 'error' : '' }}" required>
                            <!-- Error -->
                            @if ($errors->has('mobile'))
                                <div class="error">
                                    {{ $errors->first('mobile') }}
                                </div>
                            @endif
                            <label class="hidden" for="ContactFormMessage">Nội dung</label>
                            <textarea rows="10" id="ContactFormMessage" placeholder="Nội dung" name="message" class="{{ $errors->has('message') ? 'error' : '' }}" required></textarea>
                            <input type="submit" class="btn" value="Gửi yêu cầu">
                        </form> 
                    </div>  
                </div>
            </div>
            <div class="info-contacts">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xxs-6 store-info">
                        <ul class="list-info">
                            <li class="item-info main-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="Văn phòng chính" src="{{asset('images/add_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">Văn phòng chính</a></h2>
                                    <div class="des-info">Sed ut perspiciatis unde omnis 123456 Street Name, Los Angeles</div>
                                </div>
                            </li>
                            <li class="item-info email-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/email_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">EMAIL</a></h2>
                                    <div class="des-info">
                                        <a class="mailto" title="Send Email" href="mailto:Support1@shopname.com">Support1@shopname.com</a><br> <a class="mailto" title="Send Email" href="mailto:Support2@shopname.com">Support2@shopname.com</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item-info phone">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/phone_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2>PHONE</h2>
                                    <div class="des-info">
                                        <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a><br> <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xxs-6 store-info">
                        <ul class="list-info">
                            <li class="item-info main-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/add_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">Chi nhánh 01</a></h2>
                                    <div class="des-info">Sed ut perspiciatis unde omnis 123456 Street Name, Los Angeles</div>
                                </div>
                            </li>
                            <li class="item-info email-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/email_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">EMAIL</a></h2>
                                    <div class="des-info">
                                        <a class="mailto" title="Send Email" href="mailto:Support1@shopname.com">Support1@shopname.com</a><br> <a class="mailto" title="Send Email" href="mailto:Support2@shopname.com">Support2@shopname.com</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item-info phone">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/phone_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2>PHONE</h2>
                                    <div class="des-info">
                                        <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a><br> <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xxs-6 store-info">
                        <ul class="list-info">
                            <li class="item-info main-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/add_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">Chi nhánh 02</a></h2>
                                    <div class="des-info">Sed ut perspiciatis unde omnis 123456 Street Name, Los Angeles</div>
                                </div>
                            </li>
                            <li class="item-info email-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/email_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">Email</a></h2>
                                    <div class="des-info"><a class="mailto" title="Send Email" href="mailto:Support1@shopname.com">Support1@shopname.com</a><br> <a class="mailto" title="Send Email" href="mailto:Support2@shopname.com">Support2@shopname.com</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item-info phone">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/phone_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2>Phone</h2>
                                    <div class="des-info">
                                        <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a><br> <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xxs-6 store-info">
                        <ul class="list-info">
                            <li class="item-info main-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/add_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">Chi nhánh 03</a></h2>
                                    <div class="des-info">Sed ut perspiciatis unde omnis 123456 Street Name, Los Angeles</div>
                                </div>
                            </li>
                            <li class="item-info email-info">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/email_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2><a title="Main office" href="#">Email</a></h2>
                                    <div class="des-info">
                                        <a class="mailto" title="Send Email" href="mailto:Support1@shopname.com">Support1@shopname.com</a><br> <a class="mailto" title="Send Email" href="mailto:Support2@shopname.com">Support2@shopname.com</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item-info phone">
                                <div class="icon-contact">
                                    <img class="img-respon" alt="EtroStore - HiTech eCommerce Multipurpose Shopify Theme" src="{{asset('images/phone_contact892e.png')}}" />
                                </div>
                                <div class="info-content">
                                    <h2>Phone</h2>
                                    <div class="des-info">
                                        <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a><br> <a class="call-phone" title="Call: 0123-4567-8910" href="tel:0123-4567-8910">0123-4567-8910</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


