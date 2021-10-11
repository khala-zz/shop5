@extends('frontend.layouts.master')
@section('title')
<title>Cửa hàng</title>
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
                        <h3>Cửa hàng</h3>
                    </div>      
                    <nav>
                        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li>
                                <a href="{{ url('/') }}" title="Back to the frontpage" itemprop="item">
                                  <span itemprop="name">Trang chủ</span>
                              </a>
                              <meta itemprop="position" content="1" />
                            </li>


                            <li class="active" itemprop="itemlistelement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item"><span itemprop="name">Cửa hàng</span></span>
                                <meta itemprop="position" content="2" />
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
                    @include('frontend.shop.filter_shop')
                    <div class="sidebar-overlay"></div>
                    <!-- right column -->
                    @include('frontend.shop.right_shop')
                    
                

                
            </div>
        </div>
        <!-- Shop Category Area End -->
    </div>





@endsection


