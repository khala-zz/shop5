@extends('frontend.layouts.master')
	@section('title')
		<title>Sản phẩm gần đây</title>
	@endsection

	@section('content')
	<div class="main-content" id="MainContent">
        <!-- Breadcrumb Area start -->
        <section id="breadcrumbs" class=" breadcrumbbg">

            <div class="breadcrumbwrapper">
                <div class="container">      
                    <div class="breadcrumbtitle">       
                        <h3>Sản phẩm gần đây</h3>
                    </div>      
                    <nav>
                        <ol class="breadcrumb" >
                            <li>
                                <a href="{{ url('/') }}" title="Quay về trang chủ" >
                                  <span >Trang chủ</span>
                              </a>
                              
                            </li>


                            <li class="active" >
                                <span >Sản phẩm gần đây</span>
                                
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
                                              <span class="filters-toolbar-count">Có {{$product_recent -> count()}} sản phẩm</span>
                                            </div>
                                            
                                           
                                            
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
                                        @forelse($product_recent as $product)
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
                                            <p> Không có sản phẩm gần đây</p>
                                        @endforelse
                                        
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

	
	