 
 @foreach($childs as $index => $child)

   @if($item -> parent == null)
        
        
                @if(count($child -> children))
                	<li class="ss_megamenu_lv{{$index + 3}} ss_megamenu_drop  dropdown">
                    <a href="{{ url('danh-muc-san-pham/'.slugify($child -> title,'-').'/'.$child -> id) }}" class="{{Request::segment(3) == $child -> id?'active-khala':''}}" >
                       
                        {{$child -> title}} <span class="visually-hidden">expand</span>
                    </a>
                @else
                	<li class="ss_megamenu_lv{{$index + 3}} ">
                     <a href="{{ url('danh-muc-san-pham/'.slugify($child -> title,'-').'/'.$child -> id) }}" class="{{Request::segment(3) == $child -> id?'active-khala':''}}" >
                       
                       {{$child->title}}
                    </a>
                @endif
            	
            	@if(count($child->children))

		       		<ul class="ss_megamenu_dropdown dropdown_lv{{$index + 3}}">
                        @include('frontend.home.menu_category',['childs' => $child -> children])
                    </ul>
		        @endif
            
     @endif   
           
    </li>

@endforeach

 