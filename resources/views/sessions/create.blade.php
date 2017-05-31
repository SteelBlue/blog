@extends ('layouts.master')

@section ('content')
	<div class="col-md-6 col-md-offset-3">
		<h1>Sign In</h1>

		@include ('layouts.partials.errors')

		<form method="POST" action="/login">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>
		</form>
	</div>
@endsection