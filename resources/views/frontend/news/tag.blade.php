@extends('frontend.layouts.master')
    @php $title_cat = str_replace('-',' ', Request::segment(2)); @endphp
	@section('title')
		<title>{{$title_cat}}</title>
	@endsection

	@section('content')
        
        <div class="main-content" id="MainContent">
            <section id="breadcrumbs" class=" breadcrumbbg">
                <div class="breadcrumbwrapper">
                    <div class="container">
                        <div class="breadcrumbtitle">
                            <h3>Tin tức</h3>
                        </div>
                        <nav>
                            <ol class="breadcrumb">
                                <li >
                                    <a href="{{ url('/') }}" title="Quay về trang chủ" >
                                        <span >Trang chủ</span>
                                    </a>
                        
                                </li>
                                @if($title_cat <> 'Tin tức')
                                    <li class="active">{{ $title_cat }} </li>
                                @else
                                    <li class="active">Tin tức</li>
                                @endif
                                
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <!-- left news -->
                    @include('frontend.news.left_news')
                    <!-- right news -->
                    <div id="shopify-section-blog-template" class="shopify-section col-xs-12 col-sm-8 col-md-9 col-main">
    
                        <div class="blog-views">
                            <div class="blogs blog-grid row ">
                                @forelse( $news_tag as $item)
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
                            {!! $news_tag -> links() !!}
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
                </div>
            </div>
        </div>


       
     
	  
	
	

	@endsection

	
	