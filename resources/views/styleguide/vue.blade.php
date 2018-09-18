@foreach ($types as $name => $type)
	@component('styleguide.component', ['title' => $name])
		<magic-button cta="{{ $cta }}" type="{{ $type }}" size="small"></magic-button>

		<magic-button cta="{{ $cta }}" type="{{ $type }}"></magic-button>

		<magic-button cta="{{ $cta }}" type="{{ $type }}" size="large"></magic-button>

		<magic-button cta="{{ $cta }}" type="{{ $type }}" disabled></magic-button>
	@endcomponent
@endforeach
