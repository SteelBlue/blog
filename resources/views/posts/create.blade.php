@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 col-sm-offset-2">

		<h1>Publish a Post</h1>

		<hr>

		@include ('layouts.partials.errors')

		<!-- Post creation form -->
		<form method="POST" action="/posts">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" id="title" class="form-control" name="title">
			</div>

			<div class="form-group">
				<label for="body">Body</label>
				<textarea id="body" class="form-control" name="body"></textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>
		</form>
		<!-- END Post creation form -->

	</div>
@endsection