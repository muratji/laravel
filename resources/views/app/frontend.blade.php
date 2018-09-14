@extends('layouts/app')

@section('content')
	<div class="push-top container">
		<header>
			<h1 class="h1">Styleguide</h1>

			<nav class="push-top">
				<ol class="ol">
					@foreach ($styleguide as $slug => $section)
						<li><a href="#{{ $slug }}">{{ $section['heading'] ?? title_case($slug) }}</a></li>
					@endforeach

					<li><a href="#templates">Templates</a></li>
				</ol>
			</nav>
		</header>

		@foreach ($styleguide as $slug => $section)
			<h2 class="h2" id="{{ $slug }}">{{ $section['heading'] ?? title_case($slug) }}</h2>

			@foreach ($section['sections'] as $subSlug => $subSection)
				<h3 class="h3">{{ $subSection['heading'] ?? title_case($subSlug) }}</h3>

				@include(implode('.', ['styleguide', $slug, $subSlug]), $subSection['model'] ?? [])
			@endforeach
		@endforeach

		<h2 class="h2" id="templates">Templates</h2>

		<ul class="ul">
			@foreach ($templates as $template)
				<li><a href="/{{ $template }}">{{ $template }}</a></li>
			@endforeach
		</ul>
	</div>
@endsection
