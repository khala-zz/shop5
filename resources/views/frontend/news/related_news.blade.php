 <div class="blog-related-post">
    <div class="row">
        <div class="col-md-12 text-center">
            <!-- Section Title -->
            <div class="section-title underline-shape">
                <h2>Bài viết liên quan</h2>
            </div>
            <!-- Section Title -->
        </div>
    </div>
    <div class="row">
        @forelse($news_related as $item)
            <div class="col-md-4 mb-res-md-30px mb-res-sm-30px">
            <div class="blog-post-media">
                <div class="blog-image single-blog">
                    <a href="{{ route('new.detail',['slug' => slugify($item -> title,'-'),'id' => $item -> id])}}"><img src="{{ asset('uploads/news/'.$item -> image_name) }}" alt="{{ $item -> title }}" /></a>
                </div>
            </div>
            <div class="blog-post-content-inner">
                <h4 class="blog-title"><a href="{{ route('new.detail',['slug' => slugify($item -> title,'-'),'id' => $item -> id])}}">{{ $item -> title }}</a></h4>
                <ul class="blog-page-meta">
                    <li>
                        <i class="ion-person"></i> {{ $item -> user -> name }}
                    </li>
                    <li>
                        <i class="ion-calendar"></i> {{ $item -> created_at }}
                    </li>
                </ul>
            </div>
            </div>
        @empty
            <div class="post">Không có bài viết liên quan </div>
        @endforelse
       
    </div>
</div>