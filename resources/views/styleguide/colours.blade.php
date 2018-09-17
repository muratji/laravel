@foreach ($featured as $name => $colour)
	@component('styleguide.component', [
		'title' => $name,
		'meta' => $colour['variants'],
	])
		<div class="row flush-first--2">
			<div class="column width--12">
				<div class="placeholder placeholder--square">
					<div style="background-color: {{ $colour['hex'] }}">
						<p>Base</p>
						<code>{{ $colour['hex'] }}</code>
					</div>
				</div>
			</div>

			<div class="column width--12">
				<div class="row flush-first--3">
					@foreach ($colour['variants'] as $name => $hex)
						<div class="column width--8">
							<div class="placeholder placeholder--square">
								<div style="background-color: {{ $hex }}">
									{{ $name }}
									<code>{{ $hex }}</code>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	@endcomponent
@endforeach

@component('styleguide.component', [
	'title' => 'Additional',
	'meta' => $additional,
])
	<div class="row flush-first--6">
		@foreach ($additional as $name => $hex)
			<div class="column width--4">
				<div class="placeholder placeholder--square">
					<div style="background-color: {{ $hex }}">
						{{ $name }}
						<code>{{ $hex }}</code>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endcomponent
