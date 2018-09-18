@component('styleguide.component', [
	'title' => 'Types',
	'meta' => [
		'Primary' => '[default]',
		'Secondary' => 'secondary',
		'Positive' => 'positive',
		'Negative' => 'negative',
	],
])
	<div><magic-button cta="{{ $cta }}"></magic-button></div>
	&nbsp;
	<div><magic-button cta="{{ $cta }}" type="secondary"></magic-button></div>
	&nbsp;
	<div><magic-button cta="{{ $cta }}" type="positive"></magic-button></div>
	&nbsp;
	<div><magic-button cta="{{ $cta }}" type="negative"></magic-button></div>
@endcomponent

@component('styleguide.component', [
	'title' => 'Sizes',
	'meta' => [
		'Small' => 'small',
		'Medium' => '[default]',
		'Large' => 'large',
	],
])
	<div><magic-button cta="{{ $cta }}" size="small"></magic-button></div>
	&nbsp;
	<div><magic-button cta="{{ $cta }}"></magic-button></div>
	&nbsp;
	<div><magic-button cta="{{ $cta }}" size="large"></magic-button></div>
@endcomponent

@component('styleguide.component', ['title' => 'Disabled'])
	<div><magic-button cta="{{ $cta }}" disabled></magic-button></div>
@endcomponent
