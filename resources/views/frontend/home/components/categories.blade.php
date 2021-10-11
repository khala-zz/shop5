 <section class="categorie-area categorie-area-2 ptb-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Section Title -->
                            <div class="section-title mt-res-sx-30px mt-res-md-30px underline-shape">
                                <h2>Danh mục sản phẩm</h2>
                                <p>Các danh mục sản phẩm mới nhất</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Category Slider Start -->
                    <div class="category-slider-2 owl-carousel owl-nav-style-3">
                        <!-- Single item -->
                        @forelse($categories_share as $category)
                            <div class="category-item">
                                <div class="category-list">
                                    <div class="category-thumb">
                                        <a href="{{ url('danh-muc-san-pham/'.slugify($category -> title,'-').'/'.$category -> id) }}">
                                            <img src="{{asset('uploads/categories/'.$category -> image)}}" alt="{{$category -> title}}" />
                                        </a>
                                    </div>
                                    <div class="desc-listcategoreis">
                                        <div class="name_categories">
                                            <h4>{{$category -> title}}</h4>
                                        </div>
                                        <span class="number_product">{{ $category -> products -> count() }} Sản phẩm</span>
                                        <a href="{{ url('danh-muc-san-pham/'.slugify($category -> title,'-').'/'.$category -> id)}}"> Mua sắm <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="category-item">Danh mục sản phẩm đang cập nhật</div>
                        @endforelse    
                        <!-- Single item -->
                        
                    </div>
                </div>
            </section>