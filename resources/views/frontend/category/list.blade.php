@extends('frontend.layouts.master')
	@section('title')
		<title>{{$category -> title}}</title>
	@endsection

	@section('js')
		<script type="text/javascript">
			//dung cho ajax review
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	</script>
    
	@endsection

	@section('content')
    <div class="main-content" id="MainContent">
        <!-- Breadcrumb Area start -->
        <section id="breadcrumbs" class=" breadcrumbbg">

            <div class="breadcrumbwrapper">
                <div class="container">      
                    <div class="breadcrumbtitle">       
                        <h3>{{$category -> title}}</h3>
                    </div>      
                    <nav>
                        <ol class="breadcrumb" >
                            <li>
                                <a href="{{ url('/') }}" title="Quay về trang chủ" >
                                  <span itemprop="name">Trang chủ</span>
                              </a>
                              
                            </li>


                            <li class="active" >
                                <span itemprop="item"><span itemprop="name">{{$category -> title}}</span></span>
                               
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Shop Category Area End -->
        <div class="container">
            <div class="row">
                
                <!-- filter left column -->
                @include('frontend.category.filter_shop')
                <div class="sidebar-overlay"></div>
                <!-- right column -->
                @include('frontend.category.right_shop')

            </div>
        </div>
        <!-- Shop Category Area End -->
    
    </div>
@endsection

	
	