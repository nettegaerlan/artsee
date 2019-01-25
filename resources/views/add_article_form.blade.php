@extends("layouts.template")

@section("title", "Add New Article")

@section("content")
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<form method="POST" action="/admin/saveArticle" enctype="multipart/form-data">
			@if(count($errors)>0)
				@foreach($errors->all() as $error)
					<div class="p-3 mb-2 bg-danger text-white">{{$error}}</div>
				@endforeach
			@endif
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" name="title" id="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="content">Content:</label>
				<textarea name="content" id="content" class="form-control"></textarea>
			</div>
		
	
			<div class="form-group">
				<label for="category">Category:</label>
				<select name="category" id="category" class="form-control">
					@foreach(\App\Category::all() as $category)
					<option value="{{$category->id}}">{{$category->name}}	
					</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label form="image_cover">Article Cover:</label>
				<br>
				<img id="preview" src="#">
				<hr>
				<input type="file" name="image_cover" id="image_cover"  onchange="readURL(this);" class="form-control">
					
			</div>
			<div class="form-group">
				<button class="text-center btn btn-dark" type="submit">Save</button>
			</div>
			
		</form>
	</div>
</div>
@endsection


