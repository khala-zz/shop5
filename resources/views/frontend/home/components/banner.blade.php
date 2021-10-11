<div class="banner-3-area mt-0px mb-100px">
	<div class="container">
		<div class="row">
			@forelse($banners as $banner)
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">
					<div class="banner-wrapper banner-box">
						<a href="{{url($banner -> link)}}"><img src="{{asset('uploads/banners/'.$banner -> image)}}" alt="{{$banner -> title}}" /></a>
					</div>
				</div>
			@empty
				<p>Chưa có banner</p>
			@endforelse
		</div>
	</div>
</div>