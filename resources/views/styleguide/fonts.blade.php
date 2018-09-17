@foreach ($families as $name => $family)
	@component('styleguide.component', [
		'title' => $name,
		'meta' => [
			'Styles' => $family['styles'],
			'Source' => $family['source'],
		],
	])
		<p class="h3 {{ $family['class'] ?? '' }}">
			In et laborum incididunt qui veniam occaecat velit officia est nulla ipsum eu ullamco.
		</p>
	@endcomponent
@endforeach
