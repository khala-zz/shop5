@extends('frontend.layouts.master')
	@section('title')
		<title>{{$product -> title}}</title>
	@endsection
		<script type="text/javascript">
			//dung cho ajax review
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		</script>
		
	@section('content')
	    <div class="main-content" id="MainContent">
          	<section id="breadcrumbs" class=" breadcrumbbg">
            	<div class="breadcrumbwrapper">
	              	<div class="container">
	                 	<div class="breadcrumbtitle">
	                  		<h3>{{$product -> title}}</h3>
	                	</div>
		                <nav>
		                  	<ol class="breadcrumb" >
			                    <li >
			                      	<a href="{{ url('/') }}" title="Quay về trang chủ" >
			                        <span >Trang chủ</span>
			                      	</a>
			                      	
			                    </li>
			                    <li class="active" >
				                      <span ><span >{{$product -> title}}</span></span>
				                      
			                    </li>
		                  	</ol>
		                </nav>
              		</div>
            	</div>
          	</section>
			<div class="container">
			  	<div class="row">
			    	<div id="shopify-section-product-sidebar" class="shopify-section col-xs-12 col-md-3 hidden-sm sidebar-product">
						<!-- custom service -->
						@include('frontend.category.custom_service')
						<!-- custom service -->
						<!-- best seller -->
					    @include('frontend.shop.best_seller')
					    <!-- end best seller -->
						<div class="block sidebar-banner spaceBlock banners">
						  	<div>
							    <a href="{{url('danh-muc-san-pham/'.slugify($product -> category -> title,'-').'/'.$product -> category -> id)}}" title=""><img class="img-responsive" alt="{{$product -> category -> title}}" src="{{asset('uploads/categories/'.$product -> category -> image)}}" />
							    </a>
						  	</div>
						</div>
						
						
					</div>
    				<div id="shopify-section-product-template" class="shopify-section col-xs-12 main-product">
      					<script src="{{asset('js/jquery.elevateZoom.min74c5.js')}}" type="text/javascript"></script>
						<script src="{{asset('js/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js')}}" type="text/javascript"></script>
						<div class="product-template__container product"  >
						  	<div class="product-single ">
						    	<div class="row">
						      		<div class=" col-lg-6 col-md-6 col-sm-6 product-img-box product-single__image grid__item product-single__photos ">
						      			<!--hien thi thong bao -->
										@if(Session::has('flash_message_error'))
											<div class="alert alert-danger alert-dark alert-round alert-inline">
			                                    
			                                    {!! session('flash_message_error')!!}
			                                    <button type="button" class="btn btn-link btn-close">
			                                        <i class="d-icon-times"></i>
			                                    </button>
			                                </div>
										@endif
										<!--end hien thi thong bao -->
						        		
						        		{{-- get hinh danh dau tien trong gallery --}}
						        		<div id="FeaturedImageZoom-product-template" class="large-image product-single__photo product-single__photo--has-thumbnails">
						        			<!-- get image dau tien trong gallery -->
                                    		@php 
                                    			//khai bao storage google
									            $googleDriveStorage_large = Storage::disk('large_google_drive');
									            $googleDriveStorage_small = Storage::disk('small_google_drive');
									            //get lay image dau tien cho hieu ung gallery
                                    			$productGalleryFirst = $product -> gallery -> first();
                                    			
									            //get lay file info tu google storage large
						                        $fileinfo_large = collect($googleDriveStorage_large->listContents('/', false))
						                            ->where('type', 'file')
						                            ->where('name', $productGalleryFirst -> image)
						                            ->first(); 
                                    			 //echo $googleDriveStorage_large -> url($fileinfo_large['path']);

                                    		@endphp
                                    		@if(!empty($googleDriveStorage_large -> url($fileinfo_large['path'])))
						          			<a href="{{asset($googleDriveStorage_large -> url($fileinfo_large['path']))}}" >
						            			<img id="product-featured-image" src="{{asset($googleDriveStorage_large -> url($fileinfo_large['path']))}}" alt="{{$product -> title}}" data-zoom-image="{{asset($googleDriveStorage_large -> url($fileinfo_large['path']))}}" class="product-featured-img"/>
						          			</a>
						          			@endif
						        		</div>
								        <div class="thumbnails-slide thumbnails-wrapper">
								          	

          									{{-- show galery google storage --}}
          									<div id="thumb-slider" class="owl-carousel ">
								            	<!--galerry -->
                                				@forelse($product -> gallery as $index => $imageGallery)
                                					@php 
								                        //get image small from gg storage
								                        $fileinfo_small = collect($googleDriveStorage_small->listContents('/', false))
								                            ->where('type', 'file')
								                            ->where('name', $imageGallery -> image)
								                            ->first(); 
								                        //fileinfo large
								                        $fileinfo_big = collect($googleDriveStorage_large->listContents('/', false))
								                            ->where('type', 'file')
								                            ->where('name', $imageGallery -> image)
								                            ->first(); 
							                    	@endphp
							                    	@if(!empty($googleDriveStorage_large -> url($fileinfo_big['path'])) && $googleDriveStorage_small -> url($fileinfo_small['path']))
									            	<a 
										            class="thumbnail" data-zoom-image="{{asset($googleDriveStorage_large -> url($fileinfo_big['path']))}}"
										            data-index="{{$index}}"
										            data-image="{{asset($googleDriveStorage_large -> url($fileinfo_big['path']))}}">
									              		<img class="product-single__thumbnail-image" src="{{asset($googleDriveStorage_small -> url($fileinfo_small['path']))}}" alt="{{$product -> title}}">
									            	</a>
									            @empty
			                                    	<p> Chưa có gallery </p>
			                                    @endforelse
			                                    <!-- end gallery -->	
								            	
          									</div>
        								</div>
								        <script>
								          	jQuery(function($) {
								            	if ($("#FeaturedImageZoom-product-template img").length > 0) {
								              		if ($(".visible-phone").is(":visible")) {
								                		//mobile display
										                $("#product-featured-image").elevateZoom({
										                  	gallery: 'thumb-slider',
										                  	cursor: 'pointer',
										                  	galleryActiveClass: 'active',
										                  	imageCrossfade: false,
										                  	scrollZoom: false,
										                  	onImageSwapComplete: function() {
											                    $(".zoomWrapper div").hide();
											                    $('#product-featured-image').data('zoom-image', $("#product-featured-image").attr('src')).elevateZoom({
											                      gallery: 'thumb-slider',
											                      galleryActiveClass: 'active',
											                    });
										                  	},
										                  	loadingIcon: window.theme_load
										                });
										                $("#FeaturedImageZoom-product-template img").bind("click", function(e) {
										                  	return false;
										                });
								              		} else {
											                $("#FeaturedImageZoom-product-template img").elevateZoom({
											                  gallery: 'thumb-slider',
											                  cursor: 'pointer',
											                  galleryActiveClass: 'active',
											                  imageCrossfade: true,
											                  scrollZoom: true,
											                  onImageSwapComplete: function() {
											                    $(".zoomWrapper div").hide();
											                    $('#product-featured-image').data('zoom-image', $("#product-featured-image").attr('src')).elevateZoom({
											                      gallery: 'thumb-slider',
											                      galleryActiveClass: 'active',
											                    });
											                  },
											                  loadingIcon: window.theme_load
											                });
								              		}
								            	}
									            $("#thumb-slider .thumbnail").each(function() {
									              if($(this).index()==0) $(this).addClass('active');
									            });
									            /* pop up */
									            @if($product -> gallery -> isNotEmpty())
								              												                 
									            $('.large-image img').magnificPopup({
									              	
									              	items: [
									              		@foreach($product -> gallery as $imageGallery)
									              			@php 
									              											                        //fileinfo large
										                        $fileinfo_large_js = collect($googleDriveStorage_large->listContents('/', false))
										                            ->where('type', 'file')
										                            ->where('name', $imageGallery -> image)
										                            ->first(); 
									              			@endphp
									              			@if(!empty($googleDriveStorage_large -> url($fileinfo_large_js['path'])))
											                	{src: '{{asset($googleDriveStorage_large -> url($fileinfo_large_js['path']))}}'},
											                @endif
									                 	@endforeach
										                
										                 ],
									                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
									                gallery: { enabled: true, preload: [0,2] },
									                type: 'image',
									                mainClass: 'mfp-fade',
									                callbacks: {
									                open: function() {
									                var activeIndex = parseInt($('#thumb-slider .thumbnail.active').attr('data-index'));
									                var magnificPopup = $.magnificPopup.instance;
									                magnificPopup.goTo(activeIndex);
									                }
									                }
									                });
								               	@endif
								               });
								        </script>
      								</div>
							      	<div class=" col-lg-6 col-md-6 col-sm-6 product-single__detail grid__item ">
							      		<!-- form dung de add to cart -->
										<form name = "addToCart" method = "post" action = "{{url('/add-cart')}}" >
											@csrf
											<!-- cac input field dể add đến cart -->
											<input type="hidden" name="product_id" value="{{ $product -> id }}">
											<input type="hidden" name="product_name" value="{{ $product -> title }}">
											<input type="hidden" name="product_code" value="{{ $product -> product_code }}">
											<!-- end input field -->
								        	<div class="product-single__meta">
								          		<h1  class="product-single__title">{{ $product -> title }}</h1>
									          	

									            	<div class="pro-details-rating-wrap">
					                                    <div class="rating-product">
					                                    	<!-- hien thi rating -->
															<?php 
																$avg_rating = 0;
																if($product -> pro_total_rating){
																	// tru 1 vi de mac dinh cac cot do la 1 de khong che up len heroku khi de mac dinh la 0
																	$total_number = $product -> pro_total_number - 1;
																	$total_rating = $product -> pro_total_rating - 1 ;
																	if($total_number <> 0 && $total_rating <> 0){
																		$avg_rating = round($total_number/$total_rating,2);
																	}
																	
																}
																
															?>

															<span class="rating-stars selected">
																@for($i = 1; $i <= 5; $i++)
																<a class="star-{{$i}} {{$i <= $avg_rating ? 'active':''}} ">{{$i}}</a>
																@endfor
																
															</span>
															<!-- end hien thi rating -->
					                                        
					                                    </div>
					                                    
					                                </div>          
									          	
									          	<div class="product-info">
										            <p class="product-single__alb instock"><label>Tình trạng</label>: 
										            	@if($product -> amount <> 0)
										            	<i class="fa fa-check-square-o"></i> Còn hàng
										            	@else
										            		Hết hàng
										            	@endif
										            </p>	
										            <p class="product-single__type"><label>Nhãn hiệu</label>: {{$product -> brand -> title}}</p>
									          	</div>


									          	
									          	<div class="price" >
										            
										            <!-- hien thi gia -->
			                                        @if(!empty($product -> discount))

			                                            <span class="price-old"> <span class='money'>{{formatMoney($product -> price)}}</span> </span>
			                                            <!-- class new-price lay ket qua tu xu ly ajax change price -->
			                                            <span class="price-new">
			                                            	<span class='money new-price'>
			                                            		<!-- danh cho reset gia ban dau -->
							                                    <?php $product_price_reset = $product -> price * (100 - $product -> discount)/100; ?>
				                                            	{{formatMoney($product -> price * (100 - $product -> discount)/100) }}
				                                            	<!-- price xu ly cho form -->
		                                            			<input type="hidden" id = "product_price" name="product_price" value="{{ $product -> price * (100 - $product -> discount)/100 }}">
			                                            	</span>
			                                            </span>

			                                        @else	                                            
			                                            <span class="price-new">
			                                            	<!-- class new-price lay ket qua tu xu ly ajax change price -->
			                                            	<span class='money new-price'>
			                                            		<!-- danh cho reset gia ban dau -->
						                                 	 	<?php $product_price_reset = $product -> price; ?>
			                                            		{{formatMoney($product -> price)}}
			                                            		<!-- price xu ly cho form -->
			                                            		<input type="hidden" id = "product_price" name="product_price" value="{{ $product -> price }}">
			                                        		</span>
			                                        	</span>

			                                        @endif
			                                        <!-- end hien thi gia -->

									          	</div>
									          	<div class="product-single__description short" itemprop="description">
									            	<label class="hidden">Quick Overview</label>
									            	{!!$product -> description_short!!}...
									          	</div>
									          	<div itemprop="offers">
										            
										            
									              	<div id="product-variants">
									                	<!-- mau va kich co san pham -->
						                                @if($categoryFeatures)
							                                <div class="pro-details-size-color d-flex">
							                                	@if($check_color == 1)
								                                    <div class="pro-details-color-wrap">
								                                        <label>Màu sắc</label>
								                                        <div class="pro-details-color-content">
								                                            <ul>
								                                            	@foreach($categoryFeatures  as $categoryColorFeature)
								                                            		@if($categoryColorFeature -> field_type == 2 )
										                                                <li class="{{$categoryColorFeature -> field_title}} change-color" data-value ="{{$categoryColorFeature -> field_title}}"></li>
										                                                
									                                                @endif
									                                           	@endforeach
								                                            </ul>
								                                        </div>
								                                    </div>
							                                    @endif
							                                    @if($check_size == 1)
								                                    <div class="product-size">
								                                        <label>Kích cỡ</label>
								                                        <div>
									                                        <select class="change-price select-detail">
									                                        	<option value="{{ $product_price_reset}}">------</option>
									                                        	@foreach($categoryFeatures  as $categorySizeFeature)
									                                            	@if($categorySizeFeature -> field_type == 1)
											                                            <option value="{{ route('change-price',['value' => $categorySizeFeature -> id])}}"  >{{$categorySizeFeature -> field_title}}</option>

											                                        @endif
											                                    
											                                    @endforeach   
									                                        </select>
								                                    	</div>
								                                    </div>
							                                    @endif
							                                </div>
							                            @endif    
						                                <!-- mau va kich co san pham -->
									              	</div>
									              	
									              	<div class="product-options-bottom quantity-margin-top">
									                	<div class="product-form__item product-form__item--quantity">
									                  		<label for="Quantity" class="quantity-selector">Số lượng:</label> 
										                  	<div class="form_qty">
											                    <input type="text" id="qty" name="product_quantity" value="1" min="1" class="quantity-selector">
											                    <div class="inline">
											                      	<div class="increase items" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;  return false;"><i class="fa fa-angle-up"></i></div>
											                      	<div class="reduced items" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;  return false;"><i class="fa fa-angle-down"></i></div>
											                    </div>
											                 
										                  	</div>
									                	</div>
										                
										                <div class="product-form__item product-form__item--submit">
										                  	<button type="submit" name="add" class="btn product-form__cart-submit">
										                    	<span id="AddToCartText-product-template">
										                      	Thêm vào giỏ hàng
										                    	</span>
										                  	</button>
										                </div>
										                
										                
									              	</div>
										            
									          	</div>
												
												<script type="text/javascript" src="{{asset('js/lib.min6f6e.js')}}"></script>
									          	<div class="wrap__social social_share_detail clearfix">
									            	<label class="">SHARE:</label>
										            <ul>
										              <div class="addthis_inline_share_toolbox"></div>      
										              <script type="text/javascript" src="{{asset('js/addthis_widget.js')}}"></script> 
										            </ul>
									          	</div>
									          	<div class="detail_category">
									            	<h2>Danh mục: </h2>
										            <ul class="category_content">
										              <li><a href="{{url('danh-muc-san-pham/'.slugify($product -> category -> title,'-').'/'.$product -> category -> id)}}" title="{{$product -> category -> title}}">{{$product -> category -> title}}</a></li> 
										              
										            </ul>
									          	</div>
									          	
									          	<div class="wrap__brand">
									            	<label class="">Hỗ trợ thanh toán</label>
									            	<div class="wrap__brand_content">
									              		<img src="{{asset('images/payment_fe8e111c-1263-467c-a1a3-4bf082f78dcb698b.png')}}" alt="files/payment_fe8e111c-1263-467c-a1a3-4bf082f78dcb.png" />
									            	</div>
									          	</div>
	        								</div>
        								</form>
      								</div>
      								<div class="col-lg-12 col-md-12 clearfix spaceBlock">
							        	<div class="panel-group detail-bottom">
							          		<div class="tab-hozizoltal">
							            		<ul class="nav nav-tabs font-ct">
									              	<li class="active"><a href="#tabs1" data-toggle="tab">Mô tả</a></li>
									              	<li><a href="#tabs2" data-toggle="tab">Chính sách đổi trả hàng</a></li>
									              	<li><a href="#tabs3" data-toggle="tab">Thông tin thêm</a></li>
									              	<li><a href="#tabs4" data-toggle="tab">Đánh giá({{ $reviews -> count() }})</a></li>
									            </ul>
									            <div class="tab-content">
									              	<div class="tab-pane fade in active" id="tabs1">
									              		{!! $product -> description!!}
													</div>
							              			<div class="tab-pane" id="tabs2">
							              				{!! $setting -> setting_value!!}
							              			</div>
									              	<div class="tab-pane" id="tabs3">
									                	{!! $product -> additional!!}
									              	</div>
							              			<div class="tab-pane" id="tabs4">
							                			<div id="shopify-product-reviews" >
							                				<style scoped>.spr-container {
															    padding: 24px;
															    border-color: #ECECEC;}
															  .spr-review, .spr-form {
															    border-color: #ECECEC;
															  }
															</style>
															
															<div class="spr-container">
															  	<div class="spr-header">
															    	<h2 class="spr-header-title">Khách hàng đánh giá</h2>
															    	<div class="review-wrapper">
															        @if($reviews -> count() > 0)
						                                        		@foreach($reviews as $review)
						                                            		<div class="single-review">
								                                                <div class="review-img">
								                                                    <img src="{{ url('uploads/users/' . $review -> user -> image) }}" alt="{{$review -> user -> name}}" width="100px" height="100px" />
								                                                </div>
								                                                <div class="review-content">
								                                                    <div class="review-top-wrap">
								                                                        <div class="review-left">
								                                                            <div class="review-name">
								                                                                <h4>{{$review -> user -> name}}</h4>
								                                                            </div>
								                                                            <div class="rating-product">
								                                                                <div class="comment-rating ratings-container mb-0">
																									<span class="rating-stars selected">
																										@for($i = 1; $i <= 5; $i++)
																										<a class="star-{{$i}} {{$i <= $review -> rating ? 'active-tab-review':''}} ">{{$i}}</a>
																										@endfor
																										
																									</span>
																									
																								</div>
								                                                            </div>
								                                                        </div>
								                                                        
								                                                    </div>
								                                                    <div class="review-bottom">
								                                                        <p>
								                                                            {{$review -> comment}}
								                                                        </p>
								                                                    </div>
								                                                </div>
						                                            		</div>
						                                            	@endforeach
						                                            @else
																		<p>Chưa có đánh giá</p>
																	@endif
															        <h3><a href='#' class='click-show-hide-comment'>Thêm đánh giá</a></h3>
															      	
															    	</div>
							  									</div>
															  	<div class="form-comment" style='display: none'>
																    <!-- kiem tra dang nhap rui thi cho danh gia san pham -->
						                                        	@if(Auth::check())
						                                            <div class="ratting-form-wrapper pl-50">	
							                                            <div class="ratting-form">
							                                                <form action="#">
							                                                    <div class="star-box">
							                                                        <span>Đánh giá của bạn:</span>
							                                                        <span class="rating-stars selected">
																						@for($i = 1; $i <= 5; $i++)
																						<a class="star-{{$i}} start-a" href="#" data-key = "{{$i}}">{{$i}}</a>
																						@endfor
																						
																					</span>


																					<select name="rating" id="rating" required="" style="display: none;">
																						<option value="">Rate…</option>
																						<option value="5">Tuyệt vời quá</option>
																						<option value="4">Rất tốt</option>
																						<option value="3">Bình thường</option>
																						<option value="2">Tạm được</option>
																						<option value="1">Không thích</option>
																					</select>
							                                                    </div>
							                                                    <div class="row">
							                                                        
							                                                        <div class="col-md-12">
							                                                            <div class="rating-form-style form-submit">
							                                                               <input type="hidden"  class="number_rating">
																							<textarea id="reply-message" cols="30" rows="4"
																								class="form-control mb-4" placeholder="Đánh giá của bạn"
																								required></textarea>
																							
																							
																							<a href="{{route('post.review.product',$product -> id)}}" class="btn btn-primary btn-md btn-khala" id="submit_review">Gửi<i
																									 ></i></a>
							                                                            </div>
							                                                        </div>
							                                                    </div>
							                                                </form>
							                                            </div>
							                                        </div>
						                                            @else
						                                            	<h3>Đăng nhập để thêm đánh giá</h3>
						                                            	<div class="formaccount formlogin">
														                    @if($errors)

														                        {!! $errors->first('email', '<p class="help-block" style="color:red;">:message</p>') !!}
														                        {!! $errors->first('password', '<p class="help-block" style="color:red;">:message</p>') !!}
														                               
														                    @endif
														                    <div id="CustomerLoginForm" class="form-vertical block">
														                        <form method="post" action="{{ route('front-login') }}"  accept-charset="UTF-8">

														                            @csrf
														                            <h3 class="block-title">Đăng nhập</h3>

														                            <label for="CustomerEmail">Email</label>
														                            <input type="email" name="email" placeholder="Email *" value = "{{old('email')}}" required autofocus>

														                          
														                            <label for="CustomerPassword">Mật khẩu</label>
														                            <input type="password"  name = "password" id="password" placeholder="Mật khẩu *" required>
														                          

														                            <div class="submit">

														                                <input type="submit" class="btn" value="Đăng nhập">
														                            </div>

														                        </form>
														                    </div>

														                </div>
						                                            @endif
															  	</div>
															</div>
														
														</div>
							              			</div>
							            		</div>
							          		</div>
						        		</div>
						      	
    								</div>
    							
    							</div>
    						<!-- san pham lien quan -->
							@include('frontend.product.products_relate')
							<!-- end san pham lien quan -->
								
  							</div>
						</div>
					</div>
  				</div>
  			</div>
  		
	
	@endsection

	
	