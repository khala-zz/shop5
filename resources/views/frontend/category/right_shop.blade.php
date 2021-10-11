<div class="col-main col-lg-9 col-md-9">
    <!-- liet ke danh muc san pham -->
    <div id="shopify-section-collection-info" class="shopify-section">
        <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md">
            <i class="fa fa-bars"></i> Bộ lọc
        </a>
        <!-- collection info -->
        @if($category_con -> isNotEmpty())
            @include('frontend.category.collection_info')
        @endif
        <!-- end collection info -->
        <div class="collection-main">
            <div class="filters-toolbar-wrapper">
                <div class="filters-toolbar">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="view-mode pull-left">
                               <strong><a href="{{ url() -> current() }}">Bỏ lọc</a></strong>
                            </div>
                            <form method ="get" action="{{ url() -> current() }}">
                                <div class="filters-toolbar-item text-right pull-right filter-fiel">
                                    <label for="SortBy" class="label-sortby">Sắp xếp:</label>
                                        
                                    <select name="orderby"  class="filters-toolbar__input filters-toolbar__input--sort filters-toolbar-sort" onchange="this.form.submit()">
                                            
                                        <option  value="title_tang" {{Request::get('orderby') == 'title_tang'?'selected':''}}>A đến Z</option>
                                        <option  value="title_giam" {{Request::get('orderby') == 'title_giam'?'selected':''}}> Z đến A</option>
                                        <option  value="price_tang" {{Request::get('orderby') == 'price_tang'?'selected':''}}>Giá thấp đến cao</option>
                                        <option  value="price_giam" {{Request::get('orderby') == 'price_giam'?'selected':''}}> Giá cao đến thấp</option>
                                        <option value="created_at_latest" {{Request::get('orderby') == 'created_at_latest'?'selected':''}}>Mới nhất</option>
                                        <option value="created_at_oldest" {{Request::get('orderby') == 'created_at_oldest'?'selected':''}}>Cũ nhất</option>                                    
                                    </select>
                                    <!-- gan filter theo nhan hieu và tổng sản phẩm hiện theo trang -->
                                    <input type="hidden" name="count" value="{{Request::get('count')?Request::get('count') : 12}}">
                                    <input type="hidden" name="brand_filter" value="{{Request::get('brand_filter')?Request::get('brand_filter') : 0}}">
                                    <input type="hidden" name="price" value="{{Request::get('price')?Request::get('price') : 0}}">
                                    <input type="hidden" name="category_id" value="{{Request::get('category_id')?Request::get('category_id') : 0}}">
                                    <!-- end gan filter theo nhan hieu và tổng sản phẩm hiện theo trang -->             
                                </div>
                            </form>
                            <div class="filters-toolbar-item hidden">
                                <span class="filters-toolbar-count">Hiển thị {{ $products->firstItem() }} đến {{ $products->lastItem() }} của tổng {{$products->total()}} sản phẩm</span>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <span class="product-count">Hiển thị {{ $products->firstItem() }} đến {{ $products->lastItem() }}
                    của tổng {{$products->total()}} sản phẩm</span>
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
                        @foreach($products as $product)
                            <!-- kiem tra xem product co giam gia hay khong? -->
                            @if(!empty($product -> discount))
                            @php $product_price = $product -> price * (100 - $product -> discount)/100; @endphp        
                            @else
                            @php $product_price = $product -> price; @endphp
                            @endif
                            <!-- end kiem tra xem product co giam gia hay khong? -->
                        <div class="product-layout grid__item grid__item--collection-template col-md-4 col-sm-4 col-xxs-6 col-xs-12">
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
                        @endforeach
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