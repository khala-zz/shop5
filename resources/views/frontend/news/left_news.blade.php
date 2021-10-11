<div id="shopify-section-blog-sidebar" class="shopify-section col-xs-12 col-sm-4 col-md-3 col-sidebar">
	<!-- recent post -->
	@include('frontend.news.recent_post')
	<!-- end recent post -->

	<!-- best seller -->
	@include('frontend.shop.best_seller')
	<!-- end best seller -->

	<div class="block sidebar-banner spaceBlock">
		<img src="{{asset('images/siderbar_1024x1024b574.jpg')}}" alt="Cửa hàng">
	</div>
	<div class="block widget-tags spaceBlock">
		<h3 class="block-title">Tags</h3>
		<ul class="block-content">
			@foreach($tags as $tag)
			<li><a href="{{route('list.news.tags',['slug' => slugify($tag -> name,'-'),'id' => $tag -> id])}}" title="{{$tag -> name}}">{{$tag -> name}}</a></li>
			@endforeach
		</ul>
	</div>
	<style>
		@media (min-width: 768px) {
			.template-article .col-sidebar,
			.template-blog .col-sidebar { display: block!important; }
		}
		@media (max-width: 767px) {
			.template-article .col-sidebar,
			.template-blog .col-sidebar  { display: none; } 
			.template-article #displayTextLeft,
			.template-blog #displayTextLeft { display: block; }
		}
	</style>
</div>