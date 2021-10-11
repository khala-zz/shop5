<div id="shopify-section-blog-template" class="shopify-section col-xs-12 col-sm-8 col-md-9 col-main">
    <div class="blog-title">
        <form action="{{ url('tin-tuc') }}" method="get">
          
            <select id="BlogTagFilter" name="catNews" onchange="this.form.submit()">
                <option value="">Danh mục tin tức</option>
                @foreach($cat_news as $item)
                    <option value="{{ $item -> id}}" {{Request::get('catNews') == $item -> id?'selected':''}} >{{ $item -> title}}</option>
                
                @endforeach
            </select>
        </form>
    </div>
    <div class="blog-views">
        <div class="blogs blog-grid row ">
            @forelse( $news as $item)
            <div class="blog-item col-sm-6">
                <a href="{{ route('new.detail',['slug' => slugify($item -> title,'-'),'id' => $item -> id])}}" class="article-image">
                    <img src="{{ asset('uploads/news/'.$item -> image_name) }}" alt="{{$item -> title}}" />
                </a>
                <div class="a-center article__grid-meta article__grid-meta--has-image">
                    <span class="article-author"><span>Bởi</span> {{ $item -> user -> name }}</span>
                    <span class="article-date">
                        <time datetime="{{ $item -> created_at }}">{{ $item -> created_at }}</time>
                    </span>
                    <div class="article-title font-ct">
                        <a href="{{ route('new.detail',['slug' => slugify($item -> title,'-'),'id' => $item -> id])}}">{{$item -> title}}</a>
                    </div>
                    <div class="rte des-blogs">
                      {!! mb_substr(strip_tags($item->description), 0, 170) !!}...
                    </div>
                    
                </div>
            </div>
            @empty
                <p>Tin tức đang cập nhật</p>
            @endforelse
        </div>
        {!! $news -> links() !!}
    </div>
    <style> 
      .article-title.h3 a{
        font-size: 15px;
        color: #444;
    }
    .des-blogs{
        color: #666;
    }
    </style> 
</div>  