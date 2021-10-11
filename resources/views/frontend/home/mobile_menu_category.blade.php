 
@foreach($childs as $index => $child)

    @if($item -> parent == null)
        <li >


           <a href="{{ route('category.product',['slug' => slugify($child -> title,'-'),'id' => $item -> id])}}" >

             {{$child->title}}
         </a>


         @if(count($child->children))


         <ul >
            @include('frontend.home.mobile_menu_category',['childs' => $child -> children])
        </ul>
        @endif



    </li>
    @endif

@endforeach

