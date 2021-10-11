<section class="blog-area mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Section title -->
                            <div class="section-title underline-shape">
                                <h2>Tin tức</h2>
                                <p>Các bài viết mới nhất của chúng tôi.</p>
                            </div>
                            <!-- Section title -->
                        </div>
                    </div>
                    <!-- Blog Slider Start -->
                    <div class="blog-slider-active owl-carousel owl-nav-style-3">
                        <!-- single item -->
                        @forelse($news as $new)
                        <article class="blog-post">
                            <div class="blog-post-top">
                                <div class="blog-img banner-wrapper">
                                    <a href="#"><img src="{{asset('uploads/news/'.$new -> image_name)}}" alt="{{$new -> title}}" /></a>
                                </div>
                                <a href="blog-grid-left-sidebar.html" class="blog-meta">{{$new -> cat_news -> title}}</a>
                            </div>
                            <div class="blog-post-content">
                                <h4 class="blog-post-heading"><a href="{{ route('new.detail',['slug' => slugify($new -> title,'-'),'id' => $new -> id])}}">{{$new -> title}}</a></h4>
                                <p class="blog-text">
                                    {{mb_substr(strip_tags($new->description), 0, 150)}}...
                                </p>
                                <a class="read-more-btn" href="{{ route('new.detail',['slug' => slugify($new -> title,'-'),'id' => $new -> id])}}"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                            </div>
                        </article>
                        @empty
                        <p>Chưa có tin tức</p>
                        @endforelse
                        
                    </div>
                    <!-- Blog Slider Start -->
                </div>
            </section>