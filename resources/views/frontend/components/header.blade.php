<header id="header" class="header header-style1">
    <div class="header-top compad_hidden">
        <div class="container">
            <div class="row">  
                <div class="header-top-left form-inline col-lg-6 col-md-6 col-sm-6 hidden-xs">
                    <div class="telephone hidden-xs hidden-sm hidden-md">
                        <span>Hotline: 0123-444-666</span>
                    </div>
                </div>        
                <div class="header-top-right form-inline col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="toplink-item account" id="my_account">
                        <a href="#" class="dropdown-toggle">
                            <span>Tài khoản</span><span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @if(empty(Auth::check()))
                                <li><a href="{{ url('/front-login') }}" id="customer_login_link">Đăng nhập</a></li>
                                <li><a href="{{ url('/front-register') }}" id="customer_register_link">Đăng kí</a></li>
                            @else
                                <li class="log login"><a href="{{ url('/my-account') }}">Quản lý</a></li>
                                <li class="regis"><a href="{{ url('/front-logout') }}">Đăng xuất</a></li>
                            @endif
                        </ul>
                    </div>
                    
                    <div class="toplink-item checkout">
                        <a  href="{{ url('cart') }}">Giỏ hàng</a>
                    </div>
                </div>       
            </div>
        </div>
    </div>
    <div class="header-center">
        <div class="container">
            <div class="row">     
                <div class="navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="site-header-logo title-heading" itemscope itemtype="http://schema.org/Organization">
                        <a href="{{ url('/') }}" itemprop="url" class="site-header-logo-image">
                            <img src="{{ asset('images/logo_252xe2b8.png') }}"
                            srcset="{{ asset('images/logo_252xe2b8.png') }}"
                            alt="Khala store"
                            itemprop="logo">
                        </a>
                    </div>
                </div>
                <div class="middle2 col-lg-6 col-md-5 col-sm-6 col-xs-4"> 
                    <div class="search-header-w">
                        <div class="icon-search hidden-lg hidden-md"><i class="icon-magnifier"></i></div>
                        <div class="form_search">
                            <form class="formSearch" action="{{route('search.product')}}" method="post">
                                @csrf
                                
                                <input class="form-control" type="search" name="search_product" placeholder="Từ khóa... " autocomplete="off" />
                                <button class="btn btn-search" type="submit" >
                                    <span class="btnSearchText hidden-sm hidden-xs">Tìm kiếm</span>
                                    <i class="icon-magnifier hidden-lg hidden-md"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="middle-right col-lg-3 col-md-4 col-sm-6 col-xs-8">
                    <div class="minilink-header hidden-sm hidden-xs">
                        <i class="icon-user"></i>
                        <div class="inner">
                            <ul class="welcome-msg font-ct">
                                @if(empty(Auth::check()))
                                    <li class="log login"><a href="{{ url('/front-login') }}">Đăng nhập</a></li>
                                    <li class="regis"><a href="{{ url('/front-register') }}">Đăng kí</a></li>
                                @else
                                    <li class="log login"><a href="{{ url('/my-account') }}">Tài khoản</a></li>
                                    <li class="regis"><a href="{{ url('/front-logout') }}">Đăng xuất</a></li>
                                @endif
                            </ul>
                                @if(empty(Auth::check()))
                                    <div class="font-ct hidden-sm hidden-xs welcome-sg">Chào mừng khách</div>
                                @else
                                    <div class="font-ct hidden-sm hidden-xs welcome-sg">Chào mừng {{ Auth::user()->name }}</div>
                                @endif
                        </div>
                    </div>
                    <div class="minicart-header">
                        <a href="cart.html" class="site-header__carts shopcart dropdown-toggle">
                            <span class="cart-ico"><i class="icon-handbag"></i><span class="hidden">Giỏ hàng</span></span>
                            <span id="CartCount" class="cout_cart"><span class="cout_item">{{count(getProductCart())}}</span></span>  
                            <span class="cart-total hidden hidden-xs">
                                <span id="CartTotal"  class="total_cart"><span class='money'>{{formatMoney(getTotalCart())}}</span></span>
                            </span>
                        </a>
                        <div class="block-content dropdown-content" style="display: none;">
                            
                            @if(count(getProductCart()) > 0)
                            <div class="block-inner has-items no-items">
                                <!-- liet ke san pham trong gio hang -->
                                @foreach(getProductCart() as $item)
                                <div class="head-minicart">
                                    <span class="label-products">{{$item -> product_name}}</span>
                                    <span class="label-price ">{{formatMoney($item -> price)}}</span>
                                </div>
                                @endforeach
                                <ol id="minicart-sidebar" class="mini-products-list">
                                </ol>
                                <div class="bottom-action actions">
                                    <div class="price-total-w">                   
                                      <span class="label-price-total">Tổng:</span> 
                                      <span class="price-total"><span class="price"><span class='money'>{{formatMoney(getTotalCart())}}</span></span></span>        
                                      <div style="clear:both;"></div> 
                                    </div>
                                    <div class="button-wrapper">
                                      <a href="{{ url('cart') }}" class="link-button btn-gotocart" title="Xem giỏ hàng">Giỏ hàng</a>
                                      
                                      <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div class="no-items">
                              <p>Giỏ hàng trống.</p>
                              <p class="text-continue btn"><a href="{{ url('cua-hang') }}">Tiếp tục mua sắm</a></p>
                            </div>
                            @endif
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom compad_hidden">
      <div class="main-menu">  
        <div class="container">
          <div class="horizontal_menu no-padding">
            <div id="shopify-section-ss-mainmenu" class="shopify-section">
                <div class="main-megamenu">
                    <nav class="main-wrap">
                        <ul class="main-navigation nav hidden-tablet hidden-sm hidden-xs">
                            <li class="ss_megamenu_lv1  active ">      
                                <a href="{{ url('/') }}" title="Trang chủ">
                                <span class="ss_megamenu_title">Trang chủ</span>
                                </a>
                                
                            </li>
                            
                            <!-- danh muc san pham -->
                            <li class="ss_megamenu_lv1 ss_megamenu_drop  dropdown">
                                <a href="#" class="ss_megamenu_head" title="Danh mục sản phẩm">
                                    
                                    <span class="ss_megamenu_title">Danh mục sản phẩm</span>
                                    <span class="visually-hidden">expand</span>
                                </a>

                                <ul class="ss_megamenu_dropdown dropdown_lv1">
                                    @foreach($categories_share as $index => $item)
                                        @if($item -> parent == null) 
                                            @if(count($item -> children))
                                                <li class="ss_megamenu_lv2 ss_megamenu_drop  dropdown">
                                                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" class="ss_megamenu_head {{Request::segment(3) == $item -> id?'active-khala':''}}">{{$item->title}}<span class="visually-hidden">expand</span></a>
                                                    <ul class="ss_megamenu_dropdown dropdown_lv{{$index + 2}}" >
                                                        @include('frontend.home.menu_category',['childs' => $item -> children])
                                                    </ul>
                                            @else
                                                     
                                                <li class="ss_megamenu_lv2 ">
                                                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" class="{{Request::segment(3) == $item -> id?'active-khala':''}}">{{$item->title}}</a>
                                               
                                            @endif    
                                               
                                                </li>    
                                        @endif    
                                    @endforeach
                                </ul>

                            </li>
                            <!-- end danh muc san pham --> 
                            <li class="ss_megamenu_lv1 mega-item-5 ">
                                <a href="{{ url('cua-hang') }}" title="Cửa hàng">
                                <span class="ss_megamenu_title">Cửa hàng</span>
                                </a>
                            </li>
                            <li class="ss_megamenu_lv1 mega-item-6 ">
                                <a href="{{ url('tin-tuc') }}" title="Tin tức">
                                <span class="ss_megamenu_title">Tin tức</span>
                                </a>
                            </li>

                            <li class="ss_megamenu_lv1 mega-item-8 ">
                                <a href="{{ url('tin-tuc/giới-thiệu/5') }}" title="Giới thiệu">
                                    <span class="ss_megamenu_title">Giới thiệu</span>
                                </a>
                            </li>
                            <li class="ss_megamenu_lv1">
                                <a href="{{ url('lien-he') }}" title="Liên hệ">
                                    
                                    <span class="ss_megamenu_title">Liên hệ</span>
                                </a>
                            </li>
                            
                        </ul>
                        <div class="btn-mobile hidden-destop hidden-lg hidden-md">
                            <div id="canvas-menu-mobile" class="button-mobile">
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <p class="menu-text hidden">menu</p>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- mobile -->
                <div class="navigation-mobile mobile-menu hidden-lg hidden-md">
                    <div class="logo-nav">
                        <a href="index.html" class="site-header-logo-image">
                            <img src="{{asset('images/logo_252xe2b8.png')}}"
                            srcset="{{asset('images/logo_252xe2b8.png')}}"
                            alt="Khala shop"
                            >
                        </a>
                    </div>
                    <div class="menu-remove">
                        <div class="close-megamenu">
                            <i class="icon-close"></i>
                        </div>
                    </div>
                    <ul class="nav site_nav_mobile active_mobile">
                        <li class="ss_megamenu_lv1 active ">      
                            <a href="{{ url('/') }}" title="Trang chủ">
                              <span class="ss_megamenu_title">Trang chủ</span>
                            </a>
                            
                        </li>
                        
                          <!-- Danh mục sản phẩm -->
                        <li class="ss_megamenu_lv1 ss_megamenu_drop mobile_dropdown  dropdown">
                            <a href="#" class="ss_megamenu_head" title="">
                              <span class="ss_megamenu_title">Danh mục sản phẩm</span>
                              <span class="visually-hidden">expand</span>
                            </a>
                            <span class="toogleClick"><i class="fa fa-angle-down"></i></span>

                            <ul id="ss_megamenu_drop_pages" class="ss_megamenu_dropdown megamenu_dropdown nav_dropdown">
                                @foreach($categories_share as $index => $item)
                                    @if($item -> parent == null) 
                                        @if(count($item -> children))
                                            <li class="ss_megamenu_lv2 ss_megamenu_drop mobile_dropdown  dropdown">
                                                <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" class="ss_megamenu_head {{Request::segment(3) == $item -> id?'active-khala':''}}">{{$item->title}}<span class="visually-hidden">expand</span></a>
                                                <span class="toogleClick"><i class="fa fa-angle-down"></i></span>
                                                <ul id="ss_megamenu_drop_pages" class="ss_megamenu_dropdown megamenu_dropdown nav_dropdown">
                                                    @include('frontend.home.mobile_category',['childs' => $item -> children])
                                                </ul>
                                        @else
                                                 
                                            <li class="ss_megamenu_lv2 ">
                                                <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" class="{{Request::segment(3) == $item -> id?'active-khala':''}}">{{$item->title}}</a>
                                           
                                        @endif    
                                           
                                            </li>    
                                    @endif    
                                @endforeach
                            </ul>
                            
                        </li>
                        <!-- end Danh mục sản phẩm -->

                        <li class="ss_megamenu_lv1">
                            <a href="{{ url('cua-hang') }}" title="Cửa hàng">
                              <span class="ss_megamenu_title">Cửa hàng</span>
                            </a>
                        </li>
                        <li class="ss_megamenu_lv1">
                            <a href="{{ url('tin-tuc') }}" title="Tin tức">
                              <span class="ss_megamenu_title">Tin tức</span>
                            </a>
                        </li>

                        <li class="ss_megamenu_lv1">
                            <a href="{{ url('tin-tuc/giới-thiệu/5') }}" title="Giới thiệu">
                              <span class="ss_megamenu_title">Giới thiệu</span>
                            </a>
                        </li>
                        <li class="ss_megamenu_lv1">
                            <a href="{{ url('lien-he') }}" title="Liên hệ">
                              <span class="ss_megamenu_title">Liên hệ</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>