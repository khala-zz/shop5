@extends('frontend.layouts.master')
	@section('title')
		<title>Trang chủ</title>
	@endsection
	
    @section('js')
       
        <script type="text/javascript">
            //dung cho ajax review
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @endsection
	

	@section('content')
	  <div class="main-content" id="MainContent">
                <!-- hien thi thong bao -->
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
                <div id="shopify-section-ss-scroll-nav" class="shopify-section home-section">
                    <div class="custom-scoll hidden-sm hidden-md hidden-xs" style="display: none;">
                        <div class="custom-html">
                            <div class="scoll-cate list_diemneo font-ct">
                                <ul id="nav-scroll">
                                  <li class="neo1"><a href="{{ url('/') }}"><span>Trang chủ</span></a></li>
                                  <li class="neo2"><a href="{{ url('cua-hang') }}"><span>Cửa hàng</span></a></li>
                                  <li class="neo3"><a href="{{ url('tin-tuc') }}"><span>Tin tức</span></a></li>
                                  <li class="neo4"><a href="#box-link4"><span>Giới thiệu</span></a></li>
                                  <li class="neo5"><a href="{{ url('lien-he') }}"><span>Liên hệ</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

                <!-- BEGIN content_for_index -->
                
                <!-- slide show -->
                <div id="shopify-section-1507606259201" class="shopify-section home-section">

                    @include('frontend.home.components.slider')
                </div>
                <!-- end slide show -->

                <!-- Hashtags Trend -->
                <div id="shopify-section-1507621549932" class="shopify-section home-section">
                    @include('frontend.home.hashtags_trend')
                </div>
                <!-- Hashtags Trend -->

                <!-- Flash Saler -->
                <div id="shopify-section-1507624513263" class="shopify-section home-section">
                     @include('frontend.home.flash_saler')
                </div>
                <!-- end flash saler -->

                <!-- fashion beaty -->
                <div id="shopify-section-1507706696915" class="shopify-section home-section">
                    @include('frontend.home.fashion')
                </div>
                <!-- end fashion beauty -->

                <!-- technology -->
                <div id="shopify-section-1507713934101" class="shopify-section home-section">
                    @include('frontend.home.technology')
                </div>
                <!-- end technology -->

                <!-- furniture decor -->
                <div id="shopify-section-1507716298059" class="shopify-section home-section">
                    @include('frontend.home.furniture')
                </div>
                <!-- end furniture decor -->

                {{--
                <!--banner -->
                <div id="shopify-section-1507716621855" class="shopify-section home-section">
                    @include('frontend.home.banner')
                </div>
                --}}
                <!--end banner -->
                <!-- END content_for_index -->
    </div>
    <!-- model pop up -->
    @include('frontend.components.popup')
    <script>
      $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 370) {
          $('.custom-scoll').fadeIn();
      } else {
          $('.custom-scoll').fadeOut();
      }
    });
    </script>
	@endsection


