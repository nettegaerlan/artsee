@extends("layouts.template")

@section("title", "Dashboard")

@section("content")
<div class="row">
	<div class="col-lg-3">
		<div class="list-group" id="list-tab" role="tab-list">
			<a href="#profile" class="list-group-item" data-toggle="list" role="tab-list">User Information</a>
			<a href="#history" class="list-group-item" data-toggle="list" role="tab-list">Order History</a>
		</div>
	</div>
	<div class="col-lg-7">
		<div class="tab-content">
			<div class="tab-pane" id="profile" role="tabpanel">
				<span id="okay"></span>
					<s>OKAY</s>
			</div>
			<div class="tab-pane" id="history" role="tabpanel">
				<span id="na"></span>
					<s>fine</s>
			</div>
		</div>
	</div>


@endsection