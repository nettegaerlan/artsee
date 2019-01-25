@extends("layouts.template")

@section("title", "Catalog")

@section("content")
	<div class="col-lg-8 offset-lg-2">
	@foreach($articles as $article)
		<div class="card col-lg-4">
			<img src="/{{$article->image_cover}}" class="card-img-top mx-auto">
			<div class="card-body">
				<a href="/catalog/article/{{$article->id}}"><h6 class="card-title text-center">{{$article->title}}</h6></a>
			</div>
				<small>{{$article->created_at->format('m/d/Y') }}</small>
		</div>
		@endforeach
	</div>
@endsection

