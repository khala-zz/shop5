 
 @foreach($childs as $index => $child)

   @if($item -> parent == null)
        
        
                @if(count($child -> children))
                    <li class="ss_megamenu_lv{{$index + 3}} ss_megamenu_drop mobile_dropdown  dropdown">
                    <a href="{{ url('danh-muc-san-pham/'.slugify($child -> title,'-').'/'.$child -> id) }}" class="{{Request::segment(3) == $child -> id?'active-khala':''}}" >
                       
                        {{$child -> title}} <span class="visually-hidden">expand</span>
                    </a>
                    <span class="toogleClick"><i class="fa fa-angle-down"></i></span>
                @else
                    <li class="ss_megamenu_lv{{$index + 3}} ">
                     <a href="{{ url('danh-muc-san-pham/'.slugify($child -> title,'-').'/'.$child -> id) }}" class="{{Request::segment(3) == $child -> id?'active-khala':''}}" >
                       
                       {{$child->title}}
                    </a>
                @endif
                
                @if(count($child->children))

                    <ul id="ss_megamenu_drop_pages" class="ss_megamenu_dropdown megamenu_dropdown nav_dropdown">
                        @include('frontend.home.mobile_category',['childs' => $child -> children])
                    </ul>
                @endif
            
     @endif   
           
    </li>

@endforeach

 