@foreach ([
	['foo' => '1'],
	['foo' => '2'],
	['foo' => '3'],
] as $model)
	@include('blocks/button', [
		'model' => $model,
	])
@endforeach
