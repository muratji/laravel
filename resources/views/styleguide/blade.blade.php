@foreach ($types as $name => $type)
	@component('styleguide.component', ['title' => $name])
		@include('blocks.button', [
			'cta' => $cta,
			'type' => $type,
			'size' => 'small',
		])

		@include('blocks.button', [
			'cta' => $cta,
			'type' => $type,
		])

		@include('blocks.button', [
			'cta' => $cta,
			'type' => $type,
			'size' => 'large',
		])

		@include('blocks.button', [
			'cta' => $cta,
			'type' => $type,
			'disabled' => true,
		])
	@endcomponent
@endforeach
