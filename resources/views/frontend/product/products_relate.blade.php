<section class="section-related">
    <div id="related" class="related-products">
        <h3 class="detail-title font-ct"><span>Sản phẩm liên quan</span></h3>
        <div class="products-listing grid ss-carousel ss-owl">
            <div class="product-layout owl-carousel" 
            data-nav="true"
            data-margin    ="28" 
            data-lazyLoad    ="true"
            data-column1=" 3" 
            data-column2=" 3" 
            data-column3=" 3" 
            data-column4=" 2" 
            data-column5=" 2">
                @forelse($products_related as $product)
                    <!-- kiem tra xem product co giam gia hay khong? -->
                    @if(!empty($product -> discount))
                        @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
                    @else
                        @php $product_price = $product -> price; @endphp
                    @endif
                    <!-- end kiem tra xem product co giam gia hay khong? -->
                    <div class="">
                        <div class="product-item" >
                            <div class="product-item-container grid-view-item">
                                <div class="left-block">
                                    <div class="product-image-container product-image">
                                        <a href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">
                                            <img class="img-responsive" src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title}}" />
                                            
                                        </a>
                                        <ul class="swatch-list">
                                        </ul>
                                        <div class="label-info">
                                        </div>
                                    </div>
                                    <div class="box-label">
                                        @if($product -> discount)
                                        <span class="label-product label-sale"><span class="hidden">Sale</span>
                                        -{{$product -> discount}}%</span>
                                        @endif
                                        @if($product -> new)
                                            <span class="label-product label-new">Mới</span>
                                        @endif

                                    </div>
                                    <div class="button-link">
                                        <div class="btn-button add-to-cart">    
                                            <a class="btn-add-cart grl btn_df"  style="padding-top: 10px;" title="Thêm vào giỏ hàng" href="{{url('add-cart')}}" value = "{{$product -> id.'khala'.$product -> product_code.'khala'.$product -> title.'khala'.$product_price}}">
                                              <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="custom-reviews hidden-xs">          
                                            <span class="shopify-product-reviews-badge" data-id="211309723676"></span>          
                                        </div>
                                        <h4 class="title-product"><a class="product-name" href="{{url('san-pham/'.slugify($product -> title,'-').'/'.$product -> id)}}">{{$product -> title}}</a></h4>
                                        <div class="price">
                                            <!-- snippet/product-price.liquid -->
                                            <span class="visually-hidden">Regular price</span>
                                            
                                            <!-- hien thi gia -->
                                            @if(!empty($product -> discount))

                                                <span class="price-new">
                                                    <span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100) }}
                                                    </span>
                                                </span>
                                                <span class="price-old"> 
                                                    <span class='money'>{{formatMoney($product -> price)}}</span> 
                                                </span>
                                            @else
                                                <span class="price-new"><span class='money'>{{formatMoney($product -> price)}}</span></span>
                                                
                                            
                                            @endif
                                            <!-- end hien thi gia -->
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                @empty
                    Chưa có sản phẩm liên quan
                @endforelse


            </div>
        </div>
    </div>
</section>