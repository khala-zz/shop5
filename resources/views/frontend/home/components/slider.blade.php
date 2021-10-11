<div class="widget-slideshow">
    <div class="container">
        <div class="row">
            <!-- banner trai -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-banner1">
                <div class="banners col-banner">
                    @foreach($banners as $index => $banner)
                        <!-- chi lay 2 banner dau -->
                        @if($index <> 2 && $index <> 3)
                        <div class="{{$index=0?'b-img':'b-img2'}}">
                            <a href="{{$banner -> link}}" title="{{$banner -> title}}">
                                <img class="img-responsive" alt="{{$banner -> title}}" src="{{asset('uploads/banners/'.$banner -> image)}}" />
                            </a>
                        </div>
                        @endif
                    @endforeach
                    
                </div>
            </div>
            <!-- end banner trai -->
            <!-- slider -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-slider">
                <div class="tp-banner-container"  data-section-type="slideshow-section">
                    <div class="tp-banner-1507606259201" data-speed="5000">
                        <ul>
                            @foreach($sliders as $slider)
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
                                <img src="{{asset('uploads/sliders/'.$slider -> image_name)}}" alt="{{$slider -> name}}" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <div class="caption stb lfb a-center"
                                data-x="center"
                                data-y="center"
                                data-speed="500"
                                data-start="800"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">
                                <div class="tp-caption-slide-1" style="color: #000000; font-size: 30px;">{{$slider -> name}}</div>
                                    <div class="tp-caption-slide-2" style="color: #ffffff; font-size: 14px;">{!!$slider -> nametwo !!}
                                    </div>
                                    <div class="tp-caption-button">
                                        <a href="{{$slider -> namefour}}" class="slide-link-button"   style="font-size: 11px; background-color: #000000; color: #ffffff">Mua sắm <i class="fa fa-caret-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
            <!-- banner phai -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-banner2">
                <div class="banners col-banner">
                   @foreach($banners as $index => $banner)
                        <!-- chi lay 2 banner dau -->
                        @if($index <> 0 && $index <> 1)
                        <div class="{{$index=2?'b-img':'b-img2'}}">
                            <a href="{{$banner -> link}}" title="{{$banner -> title}}">
                                <img class="img-responsive" alt="{{$banner -> title}}" src="{{asset('uploads/banners/'.$banner -> image)}}" />
                            </a>
                        </div>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>