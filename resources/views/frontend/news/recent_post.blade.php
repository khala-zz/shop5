<div class="block widget-recent spaceBlock">
    <h3 class="block-title">
        Tin tức gần đây
    </h3>
    <div class="block-content">
        <ul>
            @foreach(getRecentNews() as $item)
            <li class="article">
                <a href="{{ route('new.detail',['slug' => slugify($item -> title,'-'),'id' => $item -> id])}}">
                    {{ $item -> title }}
                </a>
                <p >{{ $item -> created_at }}</p>
            </li>
            @endforeach
            
    
        </ul>
    </div>
</div>