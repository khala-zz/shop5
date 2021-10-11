@extends('frontend.layouts.master')
    
	@section('title')
		<title>Tin tức</title>
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
                                <li class="active" >
                                    <span >Tin tức</span>
                        
                                </li>
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
                     @include('frontend.news.right_news')
                </div>
            </div>
        </div>
	
    @endsection

	
	