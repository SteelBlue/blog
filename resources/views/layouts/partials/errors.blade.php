@if (count($errors))
	<!-- Form Errors -->
	<div class="alert alert-danger">
		<h4>Ermish says you fucked up... Fix it!</h4>
		<ul class="ermish-says-no">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	<!-- END Form Errors -->
@endif