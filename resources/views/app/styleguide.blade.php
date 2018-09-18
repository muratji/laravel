@extends('layouts/app')

@section('css')
	@parent

	<link rel="stylesheet" href="{{ mix('/assets/css/styleguide.css') }}">
@endsection

@section('content')
	<div class="container">
		<h1 class="h1">Styleguide</h1>

		@foreach ($model as $heading => $section)
			<hr class="push-top--large">

			<section class="push-top--large" id="{{ str_slug($heading) }}">
				<h2 class="h2"><a href="#{{ str_slug($heading) }}">#</a> {{ $heading }}</h2>

				@includeIf('styleguide.' . $section['partial'], $section['model'])
			</section>
		@endforeach
	</div>
@endsection
