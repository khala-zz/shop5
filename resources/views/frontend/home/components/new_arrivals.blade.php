<section class="recent-add-area mb-70px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Section Title -->
                            <div class="section-title underline-shape">
                                <h2>Sản phẩm mới về</h2>
                                <p>Các mẫu mã đa dạng,hiện đại</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="best-sell-slider owl-carousel owl-nav-style-3">
                       
                        <!-- Product Single Item -->
                        <!-- dung foreach array_chunk de lap 2 item 1 lan -->
                        <?php foreach (array_chunk($products_arrivals, 2) as $group) : ?>
                        @foreach($group as $key_arrivals => $value_arrivals)
                            <!-- kiem tra xem product co giam gia hay khong? -->
                            @if(!empty($value_arrivals['discount']))
                                @php $product_price = $value_arrivals['price'] * (100 - $value_arrivals['discount'])/100; @endphp        
                            @else
                                @php $product_price = $value_arrivals['price']; @endphp
                            @endif
                            <!-- end kiem tra xem product co giam gia hay khong? -->
                            @if($key_arrivals % 2 == 0)
                                <div class="product-inner-item">
                            @endif
                        
                            <article class="list-product {{$key_arrivals % 2 == 0?'mb-30px':''}}">
                                <div class="img-block">
                                    <a href="{{url('san-pham/'.slugify($value_arrivals['title'],'-').'/'.$value_arrivals['id'])}}" class="thumbnail">
                                        <img class="first-img" src="{{asset('uploads/products-daidien/'.$value_arrivals['image'])}}" alt="{{$value_arrivals['title']}}" />

                                    <div class="add-to-link">
                                        <ul>
                                            <li>
                                                <a class="btn-add-cart" href="{{url('add-cart')}}" value = "{{$value_arrivals['id'].'khala'.$value_arrivals['product_code'] . 'khala'.$value_arrivals['title'].'khala'.$product_price}}" title="Thêm vào giỏ hàng"><i class="ion-bag"></i></a>
                                            </li>
                                            
                                            <li>
                                                <a href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal"><i class="ion-ios-search-strong"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">Mới</li>
                                </ul>
                                <div class="product-decs text-center">
                                    
                                    <a class="inner-link" href="{{ url('danh-muc-san-pham/'.slugify($value_arrivals['category']['title'],'-').'/'.$value_arrivals['category']['id']) }}"><span>{{$value_arrivals['category']['title']}}</span></a>
                                    <h2><a href="{{url('san-pham/'.slugify($value_arrivals['title'],'-').'/'.$value_arrivals['id'])}}" class="product-link">{{$value_arrivals['title']}}</a></h2>
                                    <div class="rating-product padding-left-start-khala">
                                        <!-- hien thi rating -->
                                            <?php 
                                                $avg_rating = 0;
                                                if($value_arrivals['pro_total_rating']){
                                                    // tru 1 vi de mac dinh cac cot do la 1 de khong che up len heroku khi de mac dinh la 0
                                                    $total_number = $value_arrivals['pro_total_number'] - 1;
                                                    $total_rating = $value_arrivals['pro_total_rating']  - 1 ;
                                                    if($total_number <> 0 && $total_rating <> 0){
                                                         $avg_rating = round($total_number/$total_rating,2);
                                                    }
                                                   
                                                }
                                                
                                            ?>
                                            <span class="rating-stars selected" >
                                                @for($i = 1; $i <= 5; $i++)
                                                <a class="star-{{$i}} {{$i <= $avg_rating ? 'active':''}} ">{{$i}}</a>
                                                @endfor
                                                
                                            </span>
                                            <!-- end hien thi rating -->
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                             <!-- hien thi gia -->
                                            @if(!empty($value_arrivals['discount']))
                                           
                                                <li class="old-price">{{formatMoney($value_arrivals['price'])}}</li>
                                                <li class="current-price">{{formatMoney($value_arrivals['price'] * (100 - $value_arrivals['discount'])/100) }}</li>
                                                
                                                <li class="discount-price">-{{$value_arrivals['discount']}}%</li>
                                            @else
                                             
                                                <li class="old-price not-cut">{{formatMoney($value_arrivals['price'])}}</li>
                                            
                                            @endif
                                            <!-- end hien thi gia -->
                                            
                                        </ul>
                                    </div>
                                </div>
                            </article>

                           
                        @if($key_arrivals % 2 == 1)  
                                </div>
                        @endif

                        @endforeach
                        <?php endforeach; ?>  
                    </div>
                    <!-- Recent Area Slider End -->
                </div>
            </section>