@extends ('layouts.app')

@section('page_title', 'About')
@section ('content')
<div class="hero is-small">
	<div class="hero-body">
		<div class="container section">
			<div class="columns is-vcentered">
				<div class="column">
					<h2 class="subtitle is-2">La tua scuola al meglio.</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container explanation">
	<div>
		<p class="section">@lang('long.about.0')</p>
	</div>
</div>

<div class="container">
	<div class="columns is-8 is-vcentered">
		<div class="column">
			<div class="card">
				<div class="card-header is-block">
					<div class="card-image image is-paddingless">
						<img src="" alt>
					</div>
				</div>

				<div class="card-content">
					<div>
						<p class="title is-3">Mattia Sinisi</p>
						<p class="subtitle is-5">Developer, Project Manager</p>
					</div>
				</div>

				<div class="card-footer">
					<a class="card-footer-item" href="https://instagram.com/sinisimattia">
						<span class="icon">
							<i class="fab fa-instagram"></i>
						</span>
					</a>

					<a class="card-footer-item" href="https://www.linkedin.com/in/mattia-sinisi-6425bb186/">
						<span class="icon">
							<i class="fab fa-linkedin"></i>
						</span>
					</a>
				</div>
			</div>
		</div>

		<div class="column">
			<div>
				<p class="subtitle is-1">@lang('long.built.with') <strong class="has-text-danger">Laravel 6</strong></p>
			</div>

			<div>Icons made by <a href="https://www.flaticon.com/authors/darius-dan" title="Darius Dan">Darius Dan</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> and by <a href="https://fontawesome.com">Font Awesome</a></div>
		</div>
	</div>
</div>

<br>
@endsection