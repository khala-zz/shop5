<div class="filter-tags">
    <dt>
        <span class="category-filter">Giá</span>
    </dt>
    <dd>
        <!-- gia -->
        <ul>
            
            <li>
             @if(Request::get('brand_filter') || Request::get('category_id') 
                || (Request::get('brand_filter')&&Request::get('category_id')) 
                || (Request::get('brand_filter') && Request::get('price')) 
                || (Request::get('brand_filter') && Request::get('price') && Request::get('category_id'))
                )
                <a href="{{url()->current().'?price=1000-500000&brand_filter='.Request::get('brand_filter').'&category_id='.Request::get('category_id')}}" class="{{Request::get('price') == '1000-500000'?'active-khala':''}}">
                    0-500.000 đ
                </a>
                @else
                <a href="{{url()->current().'?price=1000-500000'}}" class="{{Request::get('price') == '1000-500000'?'active-khala':''}}">
                    0-500.000 đ
                </a>
                @endif

            </li>
            <li>
                @if(Request::get('brand_filter') || Request::get('category_id') 
                    || (Request::get('brand_filter')&&Request::get('category_id')) 
                    || (Request::get('brand_filter') && Request::get('price')) 
                    || (Request::get('brand_filter') && Request::get('price') && Request::get('category_id'))
                    )
                    <a href="{{url()->current().'?price=500000-1000000&brand_filter='.Request::get('brand_filter').'&category_id='.Request::get('category_id')}}" class="{{Request::get('price') == '500000-1000000'?'active-khala':''}}">
                        500.000 - 1.000.000 đ
                    </a>
                    @else
                    <a href="{{url()->current().'?price=500000-1000000'}}" class="{{Request::get('price') == '500000-1000000'?'active-khala':''}}">
                        500.000 - 1.000.000 đ
                    </a>
                    @endif
                    
            </li>
            <li>
                @if(Request::get('brand_filter') || Request::get('category_id') 
                    || (Request::get('brand_filter')&&Request::get('category_id')) 
                    || (Request::get('brand_filter') && Request::get('price')) 
                    || (Request::get('brand_filter') && Request::get('price') && Request::get('category_id'))
                    )
                    <a href="{{url()->current().'?price=1000000-2000000&brand_filter='.Request::get('brand_filter').'&category_id='.Request::get('category_id')}}" class="{{Request::get('price') == '1000000-2000000'?'active-khala':''}}">
                        1.000.000 - 2.000.000 đ
                    </a>
                    @else
                    <a href="{{url()->current().'?price=1000000-2000000'}}" class="{{Request::get('price') == '1000000-2000000'?'active-khala':''}}">
                        1.000.000 - 2.000.000 đ
                    </a>
                    @endif

            </li>
            <li>
                @if(Request::get('brand_filter') || Request::get('category_id') 
                    || (Request::get('brand_filter')&&Request::get('category_id')) 
                    || (Request::get('brand_filter') && Request::get('price')) 
                    || (Request::get('brand_filter') && Request::get('price') && Request::get('category_id'))
                    )
                    <a href="{{url()->current().'?price=2000000-4000000&brand_filter='.Request::get('brand_filter').'&category_id='.Request::get('category_id')}}" class="{{Request::get('price') == '2000000-4000000'?'active-khala':''}}">
                        2.000.000 - 4.000.000 đ
                    </a>
                    @else
                    <a href="{{url()->current().'?price=2000000-4000000'}}" class="{{Request::get('price') == '2000000-4000000'?'active-khala':''}}">
                        2.000.000 - 4.000.000 đ
                    </a>
                    @endif
                    
            </li>
            <li>
                @if(Request::get('brand_filter') || Request::get('category_id') 
                    || (Request::get('brand_filter')&&Request::get('category_id')) 
                    || (Request::get('brand_filter') && Request::get('price')) 
                    || (Request::get('brand_filter') && Request::get('price') && Request::get('category_id'))
                    )
                    <a href="{{url()->current().'?price=4000000-40000000&brand_filter='.Request::get('brand_filter').'&category_id='.Request::get('category_id')}}" class="{{Request::get('price') == '4000000-40000000'?'active-khala':''}}">
                     Trên 4.000.000 đ
                 </a>
                 @else
                 <a href="{{url()->current().'?price=4000000-40000000'}}" class="{{Request::get('price') == '4000000-40000000'?'active-khala':''}}">
                     Trên 4.000.000 đ
                 </a>
                 @endif
                 
            </li>
        </ul>
                
    </dd>
    <!-- end gia -->
    <dt>
        <span class="category-filter">Nhãn hiệu</span>
        
    </dt>
    <dd>
        <ul>
            <!-- nhan hieu -->
            @foreach($brands_count as $brand)
            <li>
             
                @if(Request::get('price') || Request::get('category_id') 
                    || (Request::get('price')&&Request::get('category_id')) 
                    || (Request::get('brand_filter') && Request::get('price')) 
                    || (Request::get('brand_filter') && Request::get('price') && Request::get('category_id'))
                    )
                    <a href="{{url()->current().'?price='.Request::get('price').'&brand_filter='.$brand -> id.'&category_id='.Request::get('category_id')}}" class="{{Request::get('brand_filter') == $brand -> id?'active-khala':''}}">
                        {{ $brand -> title}}<span>({{ $brand -> products_count}})</span> 
                    </a>
                    @else
                    <a href="{{url()->current().'?brand_filter='.$brand -> id}}" class="{{Request::get('brand_filter') == $brand -> id?'active-khala':''}}">
                        {{ $brand -> title}}<span>({{ $brand -> products_count}})</span> 
                    </a>
                    @endif   
                    
                </li>
                @endforeach
                <!-- end nhan hieu -->
        </ul>
    </dd>
</div>