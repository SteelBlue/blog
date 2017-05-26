@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">

		<h1>Publish a Post</h1>

		<hr>

		@if (count($errors))
			<!-- Form Errors -->
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			<!-- END Form Errors -->
		@endif

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
				<button type="submit" class="btn btn-default">Publish</button>
			</div>
		</form>
		<!-- END Post creation form -->

	</div>
@endsection