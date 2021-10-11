<div class="collection-info">
   
    <!-- category -->
    <div class="collection-des">
        <p>
            <div class="des_scrip">
                <p class="italic-font">{!!$category -> description!!}</p>
            </div>
            <div class="box_clear"></div>
            <div class="row">
                @foreach($category_con as $item)
                    <div class="subcategory-item col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                        <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}"> 
                            <span class="image-cate">
                                <img src="{{asset('uploads/categories/'.$item -> image)}}" alt="{{$item -> title}}"> 
                            </span>
                            <h3 class="sub_title">{{$item -> title}}</h3>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </p>
    </div>
    <!-- end category -->
</div>