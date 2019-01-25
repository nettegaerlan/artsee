@extends("layouts.template")

@section("title", "Dashboard")

@section("content")
<div class="container">
	<table class="table table-striped">
		<thead>
			<th>Title</th>
			<th>Content</th>
			<th>Category</th>
			<th>Image</th>
			<th>Created</th>
			<th>Actions</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<tr>
					<td>{{$article->title}}</td>
					<td><?php echo $article->content ?></td>
					<td>{{$article->category->name}}</td>
					<td><img src="/{{$article->image_cover}}" style="height:100px; width:100px;"></td>
					<td>
						{{$article->created_at->format('m/d/Y') }}
					</td>
						<td><a href="/edit/{{$article->id}}" class="btn btn-primary">Edit</a>
						<hr>
						<a href="/admin/delete/{{$article->id}}" class="btn btn-danger">Delete</a></td>

				</tr>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection