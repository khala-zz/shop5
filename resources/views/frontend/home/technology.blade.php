<div id="box-link4" class="widget-product-carousel style2">
  <div class="container">
    <div class="widget-head">
      <div class="wg-title"><span>{{ $category_congnghe -> title}}</span></div>
        <div class="item-sub-cat font-ct">
          <a class="view_all hidden-sm hidden-xs" href="{{ url('danh-muc-san-pham/'.slugify($category_congnghe -> title,'-').'/'.$category_congnghe -> id) }}">
            Xem tất cả
          </a>
          <div class="cate-mobi dropdown-toggle  hidden-lg hidden-md">
              <i class="fa fa-bars"></i>
          </div>
          <ul class="list-menu list-menu-mobi list-unstyled dropdown-menu">
              <!-- danh muc san pham -->
              @foreach($category_congnghe_con as $item)
                <li><a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" title="{{$item -> title}}">{{$item -> title}}</a></li>
              @endforeach()
              
          </ul>
        </div>
      </div>
      <div class="products-listing grid">
        <div class="layout-image hidden-sm hidden-xs">
          <a href="{{ url('danh-muc-san-pham/'.slugify($category_congnghe -> title,'-').'/'.$category_congnghe -> id) }}" title="{{ $category_congnghe -> title}}">
            <img class="img-responsive" alt="{{ $category_congnghe -> title}}" src="{{ asset('uploads/categories/'.$category_congnghe -> image)}}" />
          </a>
        </div>
        <div class="layout-space product-layout block-content">
          <div class="ss-carousel ss-owl">
            <div class="owl-carousel" 
            data-nav    ="false" 
            data-margin   ="0"
            data-autoplay ="true" 
            data-autospeed  ="10000" 
            data-speed    ="300"
            data-column1  ="4" 
            data-column2  ="3" 
            data-column3  ="3" 
            data-column4  ="2" 
            data-column5  ="1">
              <!-- show san pham -->
              @foreach($product_congnghe as $product)
              <!-- kiem tra xem product co giam gia hay khong? -->
              @if(!empty($product -> discount))
                  @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
              @else
                  @php $product_price = $product -> price; @endphp
              @endif
              <!-- end kiem tra xem product co giam gia hay khong? -->
              <div class="item">
                <div class="product-item">
                  <div class="product-item-container grid-view-item   ">
                    <div class="right-block">
                      <div class="caption">
                        <!-- hien thi rating -->         
                        @include('frontend.home.rating',['product' => $product])
                        <!-- end hien thi rating -->
                        <h4 class="title-product"><a class="product-name" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">{{$product -> title}}</a></h4>
                        <div class="price">
                            <!-- hien thi gia -->
                            <span class="visually-hidden">Regular price</span>
                            @if(!empty($product -> discount))
                              <span class="price-new"><span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}</span></span>
                              <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
                            @else
                              <span class="price-new"><span class='money'>{{formatMoney($product -> price)}}</span></span>
                           
                           
                            @endif
                            <!-- end hien thi gia -->

                          </div>
                      </div>
                       
                        
                      <div class="box-label">
                        <!-- show giam gia -->
                        @if(!empty($product -> discount))
                          <span class="label-product label-sale"><span class="hidden">Giảm giá</span>
                          {{$product -> discount}}%</span>
                        @endif
                        <!-- show mới -->
                        @if(!empty($product -> new))
                          <span class="label-product label-new">Mới</span>
                        @endif
                      </div>
                    </div> 
                    <div class="left-block">
                      <div class="product-image-container product-image">
                        <a class="grid-view-item__link image-ajax" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">
                          @if(file_exists(public_path('uploads/products-daidien/'.$product -> image)))
                            <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}" />
                          @else
                            <img class="img-responsive" src="{{asset('uploads/images/no-image.jpg')}}" alt="{{$product -> title}}" />
                          @endif
                          
                        </a>
                    
                        <div class="label-info">
                        </div>
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
                </div>
              </div>
              @endforeach()

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<style>
  .tab_1507713934101.widget-product-carousel .widget-head .wg-title{
    background: #39acbf ;
}
.tab_1507713934101.widget-product-carousel .widget-head .wg-title:before {
    border-left: 13px solid #39acbf ;
}
.tab_1507713934101.widget-product-carousel.style2 .widget-head .wg-title:before {
    border-right: 13px solid #39acbf ;
    border-left: none;
}
</style>