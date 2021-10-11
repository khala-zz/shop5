 <section class="category-product-area home-10 mt-40px mb-70px">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12 col-xl-9">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-lg-4">
                                    <!-- Section Title -->
                                    <div class="section-title underline-shape underline-shape-left">
                                        <h2>Nội thất trong nhà</h2>
                                    </div>
                                    <!-- Section Title -->
                                    <div class="category-product-slider owl-carousel responsive-owl-nav-style owl-nav-style owl-nav-style-4">
                                        <!-- noi that trong nha -->
                                        @foreach($products_home as $keyHome => $valueHome)
                                            @if($keyHome % 3 == 0)
                                                <div class="feature-slider-item">
                                            @endif
                                        
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="{{ url('san-pham/'.slugify($valueHome -> title,'-').'/'.$valueHome -> id) }}" class="thumbnail">
                                                        <img class="first-img" src="{{asset('uploads/products-daidien/'.$valueHome -> image)}}" alt="{{$valueHome -> title}}" />
                                                       
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-decs">
                                                    
                                                    <a class="inner-link" href="{{ url('danh-muc-san-pham/'.slugify($valueHome -> category -> title,'-').'/'.$valueHome -> category_id) }}"><span>{{$valueHome -> category -> title}}</span></a>
                                                    <h2><a href="{{ url('san-pham/'.slugify($valueHome -> title,'-').'/'.$valueHome -> id) }}" class="product-link">{{ $valueHome -> title}}</a></h2>
                                                    <div class="rating-product small-start padding-left-start-khala">
                                                        <!-- hien thi rating -->
                                                        <?php 
                                                            $avg_rating = 0;
                                                            if($valueHome -> pro_total_rating){
                                                                // tru 1 vi de mac dinh cac cot do la 1 de khong che up len heroku khi de mac dinh la 0
                                                                $total_number = $valueHome -> pro_total_number - 1;
                                                                $total_rating = $valueHome -> pro_total_rating - 1 ;
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
                                                            @if(!empty($valueHome -> discount))
                                                           
                                                            <li class="old-price">{{formatMoney($valueHome -> price)}}</li>
                                                            <li class="current-price">{{formatMoney($valueHome -> price * (100 - $valueHome -> discount)/100) }}</li>
                                                            @else
                                                             
                                                                <li class="old-price not-cut">{{formatMoney($valueHome -> price)}}</li>
                                                            
                                                            @endif
                                                            <!-- end hien thi gia -->

                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                            
                                            @if($keyHome % 3 == 2)  
                                                </div>
                                            @endif
                                        
                                        @endforeach()
                                        @if($products_home -> count() % 3 <> 0)
                                        </div>
                                        @endif
                                         <!-- end noi that trong nha -->
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-lg-4">
                                    <!-- Section Title -->
                                    <div class="section-title mt-res-sx-30px mt-res-md-30px underline-shape underline-shape-left">
                                        <h2>Nội thất văn phòng</h2>
                                    </div>
                                    <!-- Section Title -->
                                    <div class="category-product-slider owl-carousel responsive-owl-nav-style owl-nav-style owl-nav-style-4">
                                         <!-- noi that van phong -->
                                        @foreach($products_office as $key_office => $value_office)
                                            @if($key_office % 3 == 0)
                                                <div class="feature-slider-item">
                                            @endif
                                        
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="{{ url('san-pham/'.slugify($value_office -> title,'-').'/'.$value_office -> id) }}" class="thumbnail">
                                                        <img class="first-img" src="{{asset('uploads/products-daidien/'.$value_office -> image)}}" alt="{{$value_office -> title}}" />
                                                       
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="{{ url('danh-muc-san-pham/'.slugify($value_office -> category -> title,'-').'/'.$value_office -> category_id) }}"><span>{{$value_office -> category -> title}}</span></a>
                                                    <h2><a href="{{ url('san-pham/'.slugify($value_office -> title,'-').'/'.$value_office -> id) }}" class="product-link">{{$value_office -> title}}</a></h2>
                                                    <div class="rating-product small-start padding-left-start-khala">
                                                        <!-- hien thi rating -->
                                                        <?php 
                                                            $avg_office = 0;
                                                            if($value_office -> pro_total_rating){
                                                                // tru 1 vi de mac dinh cac cot do la 1 de khong che up len heroku khi de mac dinh la 0
                                                                $total_number = $value_office -> pro_total_number - 1;
                                                                $total_rating = $value_office -> pro_total_rating - 1 ;
                                                                if($total_number <> 0 && $total_rating <> 0){
                                                                     $avg_office = round($total_number/$total_rating,2);
                                                                }
                                                               
                                                            }
                                                            
                                                        ?>

                                                        <span class="rating-stars selected" >
                                                            @for($i = 1; $i <= 5; $i++)
                                                            <a class="star-{{$i}} {{$i <= $avg_office ? 'active':''}} ">{{$i}}</a>
                                                            @endfor
                                                            
                                                        </span>
                                                        <!-- end hien thi rating -->
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <!-- hien thi gia -->
                                                            @if(!empty($value_office -> discount))
                                                           
                                                            <li class="old-price">{{formatMoney($value_office -> price)}}</li>
                                                            <li class="current-price">{{formatMoney($value_office -> price * (100 - $value_office -> discount)/100) }}</li>
                                                            @else
                                                             
                                                                <li class="old-price not-cut">{{formatMoney($value_office -> price)}}</li>
                                                            
                                                            @endif
                                                            <!-- end hien thi gia -->

                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                            
                                            @if($key_office % 3 == 2)  
                                                </div>
                                            @endif
                                        
                                        @endforeach()
                                        @if($products_office -> count() % 3 <> 0)
                                        </div>
                                        @endif
                                         <!-- end noi that van phong -->
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-lg-4">
                                    <!-- Section Title -->
                                    <div class="section-title mt-res-sx-30px mt-res-md-30px underline-shape underline-shape-left">
                                        <h2>Nội thất ánh sáng</h2>
                                    </div>
                                    <!-- Section Title -->
                                    <div class="category-product-slider owl-carousel responsive-owl-nav-style owl-nav-style owl-nav-style-4">
                                       <!-- noi that anh sang -->
                                        @foreach($products_light as $key_light => $value_light)
                                            @if($key_light % 3 == 0)
                                                <div class="feature-slider-item">
                                            @endif
                                        
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="{{ url('san-pham/'.slugify($value_light -> title,'-').'/'.$value_light -> id) }}" class="thumbnail">
                                                        <img class="first-img" src="{{asset('uploads/products-daidien/'.$value_light -> image)}}" alt="{{$value_light -> title}}" />
                                                       
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="{{ url('danh-muc-san-pham/'.slugify($value_light -> category -> title,'-').'/'.$value_light -> category_id) }}"><span>{{$value_light -> category -> title}}</span></a>
                                                    <h2><a href="{{ url('san-pham/'.slugify($value_light -> title,'-').'/'.$value_light -> id) }}" class="product-link">{{$value_light -> title}}</a></h2>
                                                    <div class="rating-product small-start padding-left-start-khala">
                                                        <!-- hien thi rating -->
                                                        <?php 
                                                            $avg_light= 0;
                                                            if($value_light -> pro_total_rating){
                                                                // tru 1 vi de mac dinh cac cot do la 1 de khong che up len heroku khi de mac dinh la 0
                                                                $total_number = $value_light -> pro_total_number - 1;
                                                                $total_rating = $value_light -> pro_total_rating - 1 ;
                                                                if($total_number <> 0 && $total_rating <> 0){
                                                                     $avg_light = round($total_number/$total_rating,2);
                                                                }
                                                               
                                                            }
                                                            
                                                        ?>

                                                        <span class="rating-stars selected" >
                                                            @for($i = 1; $i <= 5; $i++)
                                                            <a class="star-{{$i}} {{$i <= $avg_light ? 'active':''}} ">{{$i}}</a>
                                                            @endfor
                                                            
                                                        </span>
                                                        <!-- end hien thi rating -->
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <!-- hien thi gia -->
                                                            @if(!empty($value_light -> discount))
                                                           
                                                            <li class="old-price">{{formatMoney($value_light -> price)}}</li>
                                                            <li class="current-price">{{formatMoney($value_light -> price * (100 - $value_light -> discount)/100) }}</li>
                                                            @else
                                                             
                                                                <li class="old-price not-cut">{{formatMoney($value_light -> price)}}</li>
                                                            
                                                            @endif
                                                            <!-- end hien thi gia -->

                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                            
                                            @if($key_light % 3 == 2)  
                                                </div>
                                            @endif
                                        
                                        @endforeach()
                                        @if($products_light -> count() % 3 <> 0)
                                        </div>
                                        @endif
                                         <!-- end noi that van phong -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12 d-lg-none d-xl-block col-xl-3 mtb-res-sm-30 mtb-res-md-30">
                            <div class="banner-inner">
                                <a href="{{url($bannerOne -> link)}}"><img src="{{asset('uploads/banners/'.$bannerOne -> image)}}" alt="{{$bannerOne -> title}}" class="img-responsive" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>