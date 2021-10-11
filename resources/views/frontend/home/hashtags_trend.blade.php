<div id="box-link1" class="widget-collection-carousel ">
    <div class="container">
        <div class="box-title font-ct">
            <h3>Danh mục sản phẩm ưa chuộng</h3>
            <a href="{{ url('cua-hang') }}">
             Xem tất cả
         </a>
     </div>
     <div class="ss-carousel ss-owl">
        <div class="owl-carousel" 
        data-nav    ="false" 
        data-margin ="6"
        data-column1  ="6" 
        data-column2  ="5" 
        data-column3  ="4" 
        data-column4  ="3" 
        data-column5  ="2">
        @foreach($categories as $category)
            <div class="item-cate banners">
            <a href="{{ url('danh-muc-san-pham/'.slugify($category -> title,'-').'/'.$category -> id) }}" title="{{$category -> title}}">
                <img class="img-responsive" alt="{{$category -> title}}" src="{{ asset('uploads/categories/tron/'.$category -> image_tron) }}" />
                <h3 class="name-cate"><span class="btn-collection font-ct">{{$category -> title}}</span></h3>
            </a>
            </div>
        @endforeach
        
        
    </div>
</div>
</div>
</div>