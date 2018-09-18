@extends('layouts/app')

@section('css')
	@parent

	<link rel="stylesheet" href="{{ mix('/assets/css/styleguide.css') }}">
@endsection

@section('content')
	<div class="s-soft-ends--large container">
		<h1 class="s-h1">Styleguide</h1>

		@foreach ($model as $heading => $section)
			<hr class="s-push-top--large s-hr">

			<section class="s-push-top--large" id="{{ str_slug($heading) }}">
				<h2 class="s-h2"><span class="s-h2__anchor"><a href="#{{ str_slug($heading) }}">#</a>&nbsp;</span>{{ $heading }}</h2>

				@includeIf('styleguide.' . $section['partial'], $section['model'])
			</section>
		@endforeach
	</div>
@endsection
