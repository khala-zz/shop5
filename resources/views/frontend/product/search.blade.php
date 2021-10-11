@extends('frontend.layouts.master')
	@section('title')
		<title>{{ $keyword }}</title>
	@endsection

	
    
	
	@section('content')
	<div class="main-content" id="MainContent">
        <!-- Breadcrumb Area start -->
        <section id="breadcrumbs" class=" breadcrumbbg">

            <div class="breadcrumbwrapper">
                <div class="container">      
                    <div class="breadcrumbtitle">       
                        <h3>{{$keyword}}</h3>
                    </div>      
                    <nav>
                        <ol class="breadcrumb" >
                            <li>
                                <a href="{{ url('/') }}" title="Quay về trang chủ" itemprop="item">
                                  <span itemprop="name">Trang chủ</span>
                              </a>
                              <meta itemprop="position" content="1" />
                            </li>


                            <li class="active" >
                                <span itemprop="item"><span itemprop="name">Tìm kiếm</span></span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Shop Category Area End -->
        <div class="container">
            <div class="row">
                
                <div class="sidebar-overlay"></div>
                <div class="col-main col-lg-12 col-md-12">
                    <!-- liet ke danh muc san pham -->
                    <div id="shopify-section-collection-info" class="shopify-section">
                      
                        <div class="collection-main">
                            <div class="filters-toolbar-wrapper">
                                <div class="filters-toolbar">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <div class="view-mode pull-left">
                                              <span class="filters-toolbar-count">Có {{$products_count -> count()}} sản phẩm</span>
                                            </div>
                                            <form method ="get" action="{{ url() -> current() }}">
                                                <div class="filters-toolbar-item text-right pull-right filter-fiel">
                                                    <label for="SortBy" class="label-sortby">Sắp xếp:</label>
                                                        
                                                    <select name="orderby"  class="filters-toolbar__input filters-toolbar__input--sort filters-toolbar-sort" onchange="this.form.submit()">
                                                            
                                                        <option value="created_at_latest" {{Request::get('orderby') == 'created_at_latest'?'selected':''}}>Mới nhất</option>
                                                        <option value="created_at_oldest" {{Request::get('orderby') == 'created_at_oldest'?'selected':''}}>Cũ nhất</option>
                                                        <option  value="title_tang" {{Request::get('orderby') == 'title_tang'?'selected':''}}>A đến Z</option>
                                                        <option  value="title_giam" {{Request::get('orderby') == 'title_giam'?'selected':''}}> Z đến A</option>
                                                        <option  value="price_tang" {{Request::get('orderby') == 'price_tang'?'selected':''}}>Giá thấp đến cao</option>
                                                        <option  value="price_giam" {{Request::get('orderby') == 'price_giam'?'selected':''}}> Giá cao đến thấp</option>
                                                                                            
                                                    </select>
                                                    <!-- gan filter theo nhan hieu và tổng sản phẩm hiện theo trang -->
                                                     <input type="hidden" name="search_product" value="{{Request::get('search_product')?Request::get('search_product') : ''}}">
                                                    
                                                    <!-- end gan filter theo nhan hieu và tổng sản phẩm hiện theo trang -->             
                                                </div>
                                            </form>
                                           
                                            
                                        </div>
                                        <div class="col-md-4 col-sm-6 hidden-xs">
                                            <span class="product-count">Có {{$products_count -> count()}} sản phẩm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- liet ke san pham -->
                        <div id="shopify-section-collection-template" class="shopify-section">
                            <style>
                                .grid__item--collection-template .grid-view-item__image {
                                    max-height: 345px;
                                }
                            </style>
                            <div data-section-id="collection-template" data-section-type="collection-template" class="products-collection">
                                <div class="product-wrapper" id="Collection">
                                    <div class="products-listing products-grid grid row  grid--view-itemss">
                                        @forelse($products as $product)
                                            <!-- kiem tra xem product co giam gia hay khong? -->
                                            @if(!empty($product -> discount))
                                            @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
                                            @else
                                            @php $product_price = $product -> price; @endphp
                                            @endif
                                            <!-- end kiem tra xem product co giam gia hay khong? -->
                                        <div class="product-layout grid__item grid__item--collection-template col-md-3 col-sm-3 col-xxs-6 col-xs-12">
                                            <div class="product-item" >
                                                <div class="product-item-container grid-view-item">
                                                    <div class="left-block">
                                                        <div class="product-image-container product-image">
                                                            <a class="grid-view-item__link image-ajax" href="{{url('/san-pham/'.slugify($product  -> title,'-').'/'.$product ->  id)}}">
                                                                <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}" />
                                                                
                                                            </a>
                                                            <ul class="swatch-list">
                                                            </ul>
                                                            <div class="label-info">
                                                                <span class="label-stock label label2  font-ct">Best-Buy</span>
                                                            </div>
                                                        </div>
                                                        <div class="box-label">
                                                            @if(!empty($product -> discount))
                                                                <span class="label-product label-sale"><span class="hidden">Giảm giá</span>
                                                                {{$product -> discount}}%</span>
                                                            @endif
                                                            @if(!empty($product -> new))
                                                                <span class="label-product label-new">Mới</span>
                                                            @endif
                                                        </div>
                                                        <div class="button-link">
                                                            <div class="btn-button add-to-cart ">    
                                                                <a class="btn-add-cart grl btn_df"  title="Thêm vào giỏ hàng" href="{{url('add-cart')}}" value = "{{$product -> id.'khala'.$product -> product_code.'khala'.$product -> title.'khala'.$product_price}}">
                                                                  <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <!-- hien thi rating -->         
                                                            @include('frontend.home.rating',['product' => $product])
                                                            <!-- end hien thi rating -->
                                                            <h4 class="title-product">
                                                                <a class="product-name" href="{{url('/san-pham/'.slugify($product  -> title,'-').'/'.$product ->  id)}}">{{$product -> title}}</a>
                                                            </h4>
                                                            <div class="price">
                                                                <!-- snippet/product-price.liquid -->
                                                                <span class="visually-hidden">Regular price</span>
                                                                @if(!empty($product -> discount))
                                                                   
                                                                    <span class="price-new">
                                                                        <span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}</span>
                                                                    </span>
                                                                    <span class="price-old"> 
                                                                        <span class='money'>{{formatMoney($product -> price)}}</span> 
                                                                    </span>
                                                             
                                                                @else
                                                                    <span class="price-new">
                                                                        <span class='money'>{{formatMoney($product -> price)}}</span>
                                                                    </span>
                                                             
                                                                @endif
                                                           
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                            <p> Không có kết quả trùng với từ khóa</p>
                                        @endforelse
                                        
                                    </div>
                                </div>
                                <div class="padding">
                                    <div class="toolbar-bottom">
                                        {!! $products -> links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Shop Category Area End -->
    
    </div>
	@endsection

	
	