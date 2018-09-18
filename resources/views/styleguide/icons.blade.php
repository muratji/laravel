@component('styleguide.component', ['title' => 'UI'])
	<div class="h3">
		@foreach ($ui as $id)
			<svg class="icon" title="{{ $id }}"><use xlink:href="{{ mix('/assets/img/sprite.svg') }}#{{ $id }}"></use></svg>
		@endforeach
	</div>
@endcomponent
