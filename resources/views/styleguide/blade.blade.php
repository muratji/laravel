@foreach ($buttons as $name => $props)
	@component('styleguide.component', ['title' => $name])
		@include('blocks.button', array_merge($props, ['size' => 'small']))

		@include('blocks.button', $props)

		@include('blocks.button', array_merge($props, ['size' => 'large']))

		@include('blocks.button', array_merge($props, ['disabled' => true]))
	@endcomponent
@endforeach
