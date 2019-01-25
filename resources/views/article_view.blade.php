@extends("layouts.template")

@section("title", "Article")

@section("content")
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<div class="card">
			<img src="/{{$article->image_cover}}" class="card-img-top mx-auto">
			<div class="card-body mt-3">
				<h5 class="card-title text-center">{{$article->title}}</h5>
				<small class="mt-2 mb-2 text-muted">{{$article->created_at->format('m/d/Y') }}</small>
					@auth
						<div class="d-flex justify-content-center align-items-center">
							<a href="/catalog/saved_article/{{$article->id}}" class="btn btn-success">Add to Collection</a>
						</div>
					@endauth

				<p class="text-center">
					<?php echo $article->content ?>	</p>
			</div>
			<div class="col-lg-8 offset-lg-2">
				<form action="/catalog/{{$article->id}}/addReview" method="POST">
						{{csrf_field()}}
						<h3 for="review">Add Review</h3>
						<textarea class="form-control" id="review" name="review"></textarea>
						<div class="d-flex flex-row-reverse">
							<button class="btn btn-primary my-2">Submit Review</button>
						</div>
					</form>
				</div>
					<div class="mt-4 col-lg-10 offset-lg-1">
							<h3>Reviews:</h3>
					@foreach($article->reviewedBy as $review)
						{{--$article->reviewedBy gets All the users who reviewed the book--}}
						<h6>{{$review->firstname}} said:</h6>
						@auth
							@if(Auth::user()->id == $review->id)
								<form action="/catalog/editreview/{{$review->pivot->id}}" method="POST">
									{{csrf_field()}}
									{{method_field("PATCH")}}
									<textarea name="review" id="edit_review">{{$review->pivot->review}}</textarea>
									<div class="form-group"><button type="submit" class="btn btn-primary">Edit Review</button>
									{{-- <a href="/catalog/deletereview/{{$review->pivot->id}}" class="btn btn-danger">Delete Review</a></div>
		 --}}
		 							<a href="/catalog/deletereview/{{$article->id}}/{{$review->pivot->id}}" class="btn btn-danger">Delete Review</a></div>
								</form>
								
							@else
								<p>{{$review->pivot->review}}</p>
							@endif
						@else
							<p>{{$review->pivot->review}}</p>
						@endauth 
						{{-- <p>{{$review->pivot->review}}</p> --}}
						@endforeach
					</div>
			</div>
		</div>
	</div>
@endsection


