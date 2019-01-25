@extends("layouts.template")

@section("title", "Dashboard")

@section("content")
<div class="row">
	<div class="col-lg-3">
		<div class="list-group" id="list-tab" role="tab-list">
			<a href="#users" class="list-group-item" data-toggle="list" role="tab-list">Users </a>
			<a href="#articles" class="list-group-item" data-toggle="list" role="tab-list">Articles</a>
			<a href="#reviews" class="list-group-item" data-toggle="list" role="tab-list">Reviews</a>
		</div>
	</div>
	<div class="col-lg-7">
		<div class="tab-content">
			<div class="tab-pane" id="users" role="tabpanel">
				<span id="okay"></span>
					<s>Users</s>
			</div>
			<div class="tab-pane" id="articles" role="tabpanel">
				<span id="na"></span>
					<s>Articles</s>
			</div>
			<div class="tab-pane" id="reviews" role="tabpanel">
				<span id="okay"></span>
					<s>Reviews</s>
			</div>
		</div>
	</div>
@endsection