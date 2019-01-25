@extends("layouts.template")

@section("title", Auth::user()->username)

@section("content")

<div class="col-lg-8 offset-lg-2">
	<h1>Collection of Articles</h1>
	<h2>Name: {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
	<h4>Articles owned:</h4>
	<table class="table table-striped">
		<thead>
			<th>Article</th>
			<th>Date Added</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach(Auth::user()->owns as $article)
				<tr><td>{{$article->title}}</td>
					<td>{{$article->created_at->format('m/d/Y')}}</td>
					<td><a href="/catalog/article/{{$article->id}}">View</a></td>
					<td><a href="">Unsave</a></td>
				</tr>
				
			@endforeach
		</tbody>
	</table>
</div>
@endsection

