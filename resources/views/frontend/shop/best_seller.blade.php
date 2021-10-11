 <div class="block widget-prd-featured best-seller spaceBlock">
        <h3 class="block-title">Bán chạy</h3>
        <div class="wrap">
            @foreach(getBestSeller() as $product)
            <div class="product-item clearfix  on-sale">
                <a href="{{ route('product.detail',['slug' => slugify($product -> title,'-'),'id' => $product -> id])}}" class="product-img">
                    <img src="{{asset('uploads/products-daidien/'.$product -> image)}}" alt="{{$product -> title }}">
                </a>
                <div class="product-info"> 
                    
                    <h4><a href="{{ route('product.detail',['slug' => slugify($product -> title,'-'),'id' => $product -> id])}}" title="{{$product -> title }}" class="product-name">{{$product -> title }}</a></h4>
                    <div class="price">
                        <!-- hien thi gia -->
                        @if(!empty($product -> discount))
                            
                            <span class="price-new"><span class='money'>{{formatMoney($product -> price * (100 - $product -> discount)/100)}}</span></span>
                            <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
                        @else
                            <span class="price-new"><span class='money'>{{formatMoney($product -> price)}}</span></span>
                        @endif
                        <!-- end hien thi gia -->
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>