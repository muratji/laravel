@foreach ($buttons as $name => $props)
	@component('styleguide.component', ['title' => $name])
		<magic-button v-bind='@json($props)' size="small"></magic-button>

		<magic-button v-bind='@json($props)'></magic-button>

		<magic-button v-bind='@json($props)' size="large"></magic-button>

		<magic-button v-bind='@json($props)' disabled></magic-button>
	@endcomponent
@endforeach
