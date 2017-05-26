@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
		@if (count($posts))
			@foreach ($posts as $post)
				@include ('posts.partials.post')
			@endforeach
		@else
			<p>Currently there are not posts to display.</p>
		@endif

		<nav class="blog-pagination">
			<a class="btn btn-outline-primary" href="#">Older</a>
			<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
		</nav>
	</div>
@endsection