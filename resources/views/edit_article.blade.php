@extends("layouts.template")

@section("title", "Edit Article")

@section("content")
<div class="row">
	<div class="col-lg-6">
		<form method="POST" action="/edit/{{$article->id}}" enctype="multipart/form-data">
			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					<p> {{ $error }} </p>
				@endforeach
			@endif
			{{csrf_field()}}
			{{method_field("PATCH")}}
			
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
			</div>
			<div class="form-group">
				<label for="summart">Content</label>
				<textarea class="form-control" id="summary-ckeditor" name="content">{{$article->content}}</textarea>
							
			</div>
		</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="category">Category</label>
						<select name="category" id="category" class="form-control">
							@foreach (\App\Category::all() as $category)
								<option value="{{$category->id}}" {{$category->id == $article->category_id ? "selected": ""}}>{{$category->name}}</option>
							@endforeach
						</select>
				</div>
				<div class="form-group">
					<label form="image_cover">Article Cover:</label>
					<br>
					<img src="/{{$article->image_cover}}" style="height:200px; width:200px;" id="preview">
					<hr>
					<input type="file" name="image_cover" id="image_cover" onchange="readURL(this);" class="form-control">
						
				</div>
				<div class="form-group">
					<button class="text-center btn btn-dark" type="submit">Edit Article</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection