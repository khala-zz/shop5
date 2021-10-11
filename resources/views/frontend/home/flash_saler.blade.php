<div id="box-link2" class="widget-product-deals">
  <div class="container">
    <div class="box-title font-ct">
      <h3>Flash Saler</h3>
      <a href="{{url('cua-hang')}}">
        Xem tất cả
      </a>
    </div>
    <div class="row">
      <!-- cai thu 1 -->
      <div class="col-xs-12 col-md-6 col-sm-6 view-item-deals">
        <div class="item-cate banners">
          <div>
            <a href="{{url('cua-hang')}}" title="Khala shop">
              <img class="img-responsive" alt="Khala shop" src="{{asset('images/v1-banner5c129.png')}}" />
            </a>
          </div>
        </div>
        <div class="item-product">
          <div class="ss-carousel ss-owl">
            <div class="owl-carousel" 
            data-nav    ="true" 
            data-margin ="10"
            data-column1  ="1" 
            data-column2  ="1" 
            data-column3  ="1" 
            data-column4  ="1" 
            data-column5  ="1">
              @foreach($products_flash_sale as $product)
                <!-- kiem tra xem product co giam gia hay khong? -->
                    @if(!empty($product -> discount))
                        @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
                    @else
                        @php $product_price = $product -> price; @endphp
                    @endif
                <!-- end kiem tra xem product co giam gia hay khong? -->
                @if(\Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') >= \Carbon\Carbon::now()->format('Y/m/d'))
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-item">
                        <div class="row">
                          <div class="left-block col-lg-6 col-md-6 col-xxs-6">
                            <div class="product-image-container product-image">
                              <a class="grid-view-item__link image-ajax" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">
                                <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}">
                              </a>
                              <div class="label-info">
                              </div>
                              <div class="box-label">
                                <span class="label-product label-sale">
                                  <span class="hidden">Giảm giá</span>
                                {{$product -> discount}}%</span>
                                 <!-- show mới -->
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
                          </div>
                          <div class="right-block col-lg-6 col-md-6 col-xxs-6">
                            <div class="caption">
                              <div class="product-vendor">
                                <a href="{{ url('danh-muc-san-pham/'.slugify($product -> category -> title,'-').'/'.$product -> category -> id) }}" title="{{$product -> category -> title}}">{{$product -> category -> title}}</a>
                              </div>
                              <!-- hien thi rating -->         
                                       
                              @include('frontend.home.rating',['product' => $product])
                        
                              <!-- end hien thi rating -->
                              <h5 class="title-product"><a class="product-name" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">{{$product -> title}}</a></h5>
                              <div class="price">
                                <!-- snippet/product-price.liquid -->
                                <span class="visually-hidden">Regular price</span>
                                <span class="price-new"><span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}</span></span>
                                <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
                              </div>
                              
                              <div class="countdown_tab">
                                <div class="countdown_inner" data-date="{{ \Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') }}"></div>
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
              
            </div>
          </div>
        </div>
      </div>

    <!-- cai thu 2 -->
    <div class="col-xs-12 col-md-6 col-sm-6 view-item-deals">
      <div class="item-cate banners">
        <div>
          <a href="{{ url('cua-hang') }}" title="Khala shop">
            <img class="img-responsive" alt="Khala shop" src="{{asset('images/v1-banner630a0.png')}}" />
          </a>
        </div>
      </div>
      <div class="item-product">
        <div class="ss-carousel ss-owl">
          <div class="owl-carousel" 
          data-nav    ="true" 
          data-margin ="10"
          data-column1  ="1" 
          data-column2  ="1" 
          data-column3  ="1" 
          data-column4  ="1" 
          data-column5  ="1">
            
             @foreach($product_ship as $product)
                  <!-- kiem tra xem product co giam gia hay khong? -->
                    @if(!empty($product -> discount))
                        @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
                    @else
                        @php $product_price = $product -> price; @endphp
                    @endif
                  <!-- end kiem tra xem product co giam gia hay khong? -->
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-item">
                        <div class="row">
                          <div class="left-block col-lg-6 col-md-6 col-xxs-6">
                            <div class="product-image-container product-image">
                              <a class="grid-view-item__link image-ajax" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">
                                <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}">
                              </a>
                              <div class="label-info">
                              </div>
                              <div class="box-label">
                                <span class="label-product label-sale">
                                  <span class="hidden">Giảm giá</span>
                                {{$product -> discount}}%</span>
                                 <!-- show mới -->
                                @if(!empty($product -> new))
                                  <span class="label-product label-new">Mới</span>
                                @endif
                              </div>
                              <div class="button-link">
                                <div class="btn-button add-to-cart">    
                                  <a class="btn-add-cart grl btn_df"  title="Thêm vào giỏ hàng" href="{{url('add-cart')}}" value = "{{$product -> id.'khala'.$product -> product_code.'khala'.$product -> title.'khala'.$product_price}}">
                                    <i class="fa fa-shopping-cart"></i>
                                  </a>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <div class="right-block col-lg-6 col-md-6 col-xxs-6">
                            <div class="caption">
                              <div class="product-vendor">
                                <a href="{{ url('danh-muc-san-pham/'.slugify($product -> category -> title,'-').'/'.$product -> category -> id) }}" title="{{$product -> category -> title}}">{{$product -> category -> title}}</a>
                              </div>
                              <!-- hien thi rating -->         
                                      
                              @include('frontend.home.rating',['product' => $product])
                        
                              <!-- end hien thi rating -->
                              <h5 class="title-product"><a class="product-name" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">{{$product -> title}}</a></h5>
                              <div class="price">
                                <!-- snippet/product-price.liquid -->
                                <span class="visually-hidden">Regular price</span>
                                <span class="price-new"><span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}</span></span>
                                <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
                              </div>
                              
                              <div class="countdown_tab">
                                <div class="countdown_inner" data-date="{{ \Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') }}"></div>
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                
              @endforeach
          </div>
      </div>
    </div>
  </div>
</div>
<!-- cái thư 3 -->
<div class="col-xs-12 col-md-6 col-sm-6 view-item-deals">
  <div class="item-cate banners">
    <div>
      <a href="{{ url('danh-muc-san-pham/ghe/12') }}" title="Thiết kế nội thất">
        <img class="img-responsive" alt="Thiết kế nội thất" src="{{asset('images/v1-banner730a0.png')}}" />
      </a>
    </div>
  </div>
  <div class="item-product">
    <div class="ss-carousel ss-owl">
      <div class="owl-carousel" 
      data-nav    ="true" 
      data-margin ="10"
      data-column1  ="1" 
      data-column2  ="1" 
      data-column3  ="1" 
      data-column4  ="1" 
      data-column5  ="1">
        
        
        @foreach($products_flash_sale as $product)
          <!-- kiem tra xem product co giam gia hay khong? -->
          @if(!empty($product -> discount))
              @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
          @else
              @php $product_price = $product -> price; @endphp
          @endif
        <!-- end kiem tra xem product co giam gia hay khong? -->
          <!-- kiem tra ngay giam gia con hang va la danh muc thiet ke noi that -->
          @if(\Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') >= \Carbon\Carbon::now()->format('Y/m/d') && $product -> category -> id == 12)
            <div class="product-item">
              <div class="item-inner">
                <div class="product-item">
                  <div class="row">
                    <div class="left-block col-lg-6 col-md-6 col-xxs-6">
                      <div class="product-image-container product-image">
                        <a class="grid-view-item__link image-ajax" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">
                          <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}">
                        </a>
                        <div class="label-info">
                        </div>
                        <div class="box-label">
                          <span class="label-product label-sale">
                            <span class="hidden">Giảm giá</span>
                          {{$product -> discount}}%</span>
                           <!-- show mới -->
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
                    </div>
                    <div class="right-block col-lg-6 col-md-6 col-xxs-6">
                      <div class="caption">
                        <div class="product-vendor">
                          <a href="{{ url('danh-muc-san-pham/'.slugify($product -> category -> title,'-').'/'.$product -> category -> id) }}" title="{{$product -> category -> title}}">{{$product -> category -> title}}</a>
                        </div>
                        <!-- hien thi rating -->         
                                
                        @include('frontend.home.rating',['product' => $product])
                        
                        <!-- end hien thi rating -->
                        <h5 class="title-product"><a class="product-name" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">{{$product -> title}}</a></h5>
                        <div class="price">
                          <!-- snippet/product-price.liquid -->
                          <span class="visually-hidden">Regular price</span>
                          <span class="price-new"><span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}</span></span>
                          <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
                        </div>
                        
                        <div class="countdown_tab">
                          <div class="countdown_inner" data-date="{{ \Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') }}"></div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- cái thu 4 -->
<div class="col-xs-12 col-md-6 col-sm-6 view-item-deals">
  <div class="item-cate banners">
    <div>
      <a href="{{ url('cua-hang') }}" title="Khala shop">
        <img class="img-responsive" alt="Khala shop" src="{{asset('images/v1-banner830a0.png')}}" />
      </a>
    </div>
  </div>
  <div class="item-product">
    <div class="ss-carousel ss-owl">
      <div class="owl-carousel" 
      data-nav    ="true" 
      data-margin ="10"
      data-column1  ="1" 
      data-column2  ="1" 
      data-column3  ="1" 
      data-column4  ="1" 
      data-column5  ="1">
      
        @foreach($products_flash_sale as $product)
          <!-- kiem tra xem product co giam gia hay khong? -->
          @if(!empty($product -> discount))
              @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
          @else
              @php $product_price = $product -> price; @endphp
          @endif
        <!-- end kiem tra xem product co giam gia hay khong? -->
          <!-- kiem tra ngay giam gia con hang va la danh muc thiet ke noi that -->
          @if(\Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') >= \Carbon\Carbon::now()->format('Y/m/d') && $product -> discount >= 20 && $product -> discount <= 40)
            <div class="product-item">
              <div class="item-inner">
                <div class="product-item">
                  <div class="row">
                    <div class="left-block col-lg-6 col-md-6 col-xxs-6">
                      <div class="product-image-container product-image">
                        <a class="grid-view-item__link image-ajax" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">
                          <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}">
                        </a>
                        <div class="label-info">
                        </div>
                        <div class="box-label">
                          <span class="label-product label-sale">
                            <span class="hidden">Giảm giá</span>
                          {{$product -> discount}}%</span>
                           <!-- show mới -->
                          @if(!empty($product -> new))
                            <span class="label-product label-new">Mới</span>
                          @endif
                        </div>
                        <div class="button-link">
                          <div class="btn-button add-to-cart">    
                            <a class="btn-add-cart grl btn_df"  title="Thêm vào giỏ hàng" href="{{url('add-cart')}}" value = "{{$product -> id.'khala'.$product -> product_code.'khala'.$product -> title.'khala'.$product_price}}">
                                    <i class="fa fa-shopping-cart"></i>
                            </a>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="right-block col-lg-6 col-md-6 col-xxs-6">
                      <div class="caption">
                        <div class="product-vendor">
                          <a href="{{ url('danh-muc-san-pham/'.slugify($product -> category -> title,'-').'/'.$product -> category -> id) }}" title="{{$product -> category -> title}}">{{$product -> category -> title}}</a>
                        </div>
                        <!-- hien thi rating -->         
                        @include('frontend.home.rating',['product' => $product])
                        <!-- end hien thi rating -->
                        <h5 class="title-product"><a class="product-name" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">{{$product -> title}}</a></h5>
                        <div class="price">
                          <!-- snippet/product-price.liquid -->
                          <span class="visually-hidden">Regular price</span>
                          <span class="price-new"><span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}</span></span>
                          <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
                        </div>
                        
                        <div class="countdown_tab">
                          <div class="countdown_inner" data-date="{{ \Carbon\Carbon::parse($product -> discount_end_date)->format('Y/m/d') }}"></div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>