<div class="col-sidebar sidebar-fixed col-lg-3 col-md-3">
    <span id="close-sidebar" class="btn-fixed hidden-md hidden-lg"><i class="fa fa-times"></i></span>
    <div id="shopify-section-sidebar" class="shopify-section">
        
        <script src="{{asset('js/jquery.history9e56.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/ss-filter-shopbyacbc.js')}}" type="text/javascript"></script>
        
        <div class="block widget-filter yt-left-wrap clearfix">
            <div id="layered-navigation">
                <div class="block block-layered-nav">
                    <div class="block-title">
                        <strong><span>Bộ lọc</span></strong>
                    </div>
                    <div class="block-content">
                        <dl id="narrow-by-list">
                            <div class="widget widget-category">
                                <dt class="category-filter">Danh mục sản phẩm</dt>
                                <div class="widget-content">  
                                    <!-- danh muc san pham -->
                                    <ul class="toggle-menu list-menu">
                                        @foreach($categories_share as $index => $item)
                                            @if($item -> parent == null) 
                                                @if(count($item -> children))
                                                    <li class="active toggle-content">
                                                        <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" class="{{Request::segment(3) == $item -> id?'active-khala':''}}">{{$item->title}}<span class="caret"></span></a>
                                                        <ul class="sub-menu level-{{$index + 1}}" style="display: none;">
                                                            @include('frontend.category.menu_category',['childs' => $item -> children])
                                                        </ul>
                                                @else
                                                         
                                                    <li >
                                                        <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}" class="{{Request::segment(3) == $item -> id?'active-khala':''}}">{{$item->title}}</a>
                                                   
                                                @endif    
                                                   
                                                    </li>    
                                            @endif    
                                        @endforeach
                                    </ul>
                                    <!-- end danh muc san pham -->  
                                </div>
                            </div>
                            <!-- Custom Services -->
                            @include('frontend.category.filter_tags')
                            <!-- end Custom Services -->
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix clr clear"></div>
        <!-- best seller -->
        @include('frontend.shop.best_seller')
        <!-- end best seller -->
        <!-- Custom Services -->
        @include('frontend.category.custom_service')
        <!-- end Custom Services -->
    </div>
    
    <style>
        @media (min-width: 768px) {
          .template-collection .col-sidebar { display: block!important; }
      }
    </style>
    
    
</div>
