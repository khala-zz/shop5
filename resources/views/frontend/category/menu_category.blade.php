 
 @foreach($childs as $index => $child)

   @if($item -> parent == null)
        <li class="menu-item-has-children menu-item-has-children-{{$index + 2}}">
        
                @if(count($child -> children))
                    <a href="{{ url('danh-muc-san-pham/'.slugify($child -> title,'-').'/'.$child -> id) }}" class="{{Request::segment(3) == $child -> id?'active-khala':''}}" >
                       
                        {{$child -> title}} <i class="ion-ios-arrow-down ion-ios-arrow-down-khala"></i>
                    </a>
                @else
                     <a href="{{ url('danh-muc-san-pham/'.slugify($child -> title,'-').'/'.$child -> id) }}" class="{{Request::segment(3) == $child -> id?'active-khala':''}}" >
                       
                       {{$child->title}}
                    </a>
                @endif
            	
            	@if(count($child->children))

		            
		       		<ul class="category-mega-menu category-mega-menu-{{$index + 2}}">
                        @include('frontend.category.menu_category',['childs' => $child -> children])
                    </ul>
		        @endif
            
     @endif   
           
    </li>

@endforeach

 