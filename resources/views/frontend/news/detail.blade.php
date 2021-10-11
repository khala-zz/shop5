@extends('frontend.layouts.master')
	@section('title')
		<title>{{$news -> title}}</title>
	@endsection

	@section('content')
	   <div class="main-content" id="MainContent">
            <section id="breadcrumbs" class=" breadcrumbbg">
                <div class="breadcrumbwrapper">
                    <div class="container">
                        <nav>
                            <ol class="breadcrumb" >
                                <li >
                                    <a href="{{ url('/') }}" title="Quay về trang chủ" >
                                        <span >Trang chủ</span>
                                    </a>
            
                                </li>
                                <li >
                                    <a href="{{ url('tin-tuc') }}" title="Tin tức" >
                                    <span >Tin tức</span>
                                    </a>
            
                                </li>
                                <li class="active" >
                                    <span >{{$news -> title}}</span>
            
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <!-- left column -->
                    @include('frontend.news.left_news')
                    <!-- end left column -->

                    <div class="article-detail col-main col-xs-12 col-sm-8 col-md-9 col-main">
                        <article class="article" >
                            <div class="article-info">
                                <div id="shopify-section-article-template" class="shopify-section">
                                    <div class="article-img">
                                        <img src="{{ asset('uploads/news/'.$news -> image_name) }}">
                                    </div>
                                    <div class="section-article-info ">
                                        <span class="article__author"><span>Bởi</span> {{ $news -> user -> name }}</span>
                                        <span class="article__date">
                                        <time datetime="{{ $news -> created_at }}">{{ $news -> created_at }}</time>
                                        </span>
                                        <h1 class="article__title font-ct">{{ $news -> title }}</h1>
                                    </div>
                                    <div class="rte" itemprop="articleBody">
                                        {!! $news -> content !!}
                                    </div>
                                    
                                    <!-- /snippets/social-sharing.liquid -->
                                    <div class="social-sharing">
                                        Chia sẻ: 
                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://ss-etrostores.myshopify.com/blogs/news/thurmond-s-1948-presidential" class=" btn--small btn--secondary btn--share share-facebook" title="Chia sẻ lên facebook">
                                          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 20 20"><path fill="#444" d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z"/></svg>
                                          <span class="share-title hidden" aria-hidden="true">Share</span>
                                          <span class="visually- hidden">Chia sẻ lên facebook</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://twitter.com/share?text=Thurmond%E2%80%99s%201948%20Presidential%20Ipsum&amp;url=https://ss-etrostores.myshopify.com/blogs/news/thurmond-s-1948-presidential" class=" btn--small btn--secondary btn--share share-twitter" title="Chia sẻ lên Twitter">
                                          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 20 20"><path fill="#444" d="M19.551 4.208q-.815 1.202-1.956 2.038 0 .082.02.255t.02.255q0 1.589-.469 3.179t-1.426 3.036-2.272 2.567-3.158 1.793-3.963.672q-3.301 0-6.031-1.773.571.041.937.041 2.751 0 4.911-1.671-1.284-.02-2.292-.784T2.456 11.85q.346.082.754.082.55 0 1.039-.163-1.365-.285-2.262-1.365T1.09 7.918v-.041q.774.408 1.773.448-.795-.53-1.263-1.396t-.469-1.864q0-1.019.509-1.997 1.487 1.854 3.596 2.924T9.81 7.184q-.143-.509-.143-.897 0-1.63 1.161-2.781t2.832-1.151q.815 0 1.569.326t1.284.917q1.345-.265 2.506-.958-.428 1.386-1.732 2.18 1.243-.163 2.262-.611z"/></svg>
                                          <span class="share-title hidden" aria-hidden="true">Tweet</span>
                                          <span class="visually- hidden">Chia sẻ lên Twitter</span>
                                        </a>
                                    </div>
                                    
                                    <style> 
                                      h1.article__title{
                                        font-size: 18px;
                                        color: #444;
                                        margin: 0 0 10px;
                                      }
                                      .rte span{
                                        color: #666;
                                      }
                                    </style> 
                                </div>
                            </div>
                        </article>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
	
	

	@endsection

	
	