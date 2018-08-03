@foreach ($featured as $heading => $options)
	<div class="push-top--large row flush-first--2">
		<div class="column width--10">
			<h4 class="h4">{{ $heading }}</h4>

			<dl class="push-top">
				@foreach ((['Base' => $options['hex']] + $options['variants']) as $name => $hex)
					<dt>{{ $name }}</dt>
						<dd><code>{{ $hex }}</code></dd>
				@endforeach
			</dl>
		</div>

		<div class="column width--14">
			<div class="row flush-first--2">
				<div class="column width--12">
					<div class="placeholder placeholder--square">
						<div style="background-color: {{ $options['hex'] }}">
							{{ $options['colour'] }}
						</div>
					</div>
				</div>

				<div class="column width--12">
					<div class="row flush-first--3">
						@foreach ($options['variants'] as $name => $hex)
							<div class="column width--8">
								<div class="placeholder placeholder--square">
									<div style="background-color: {{ $hex }}">
										{{ $name }}
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endforeach

<div class="push-top--large row flush-first--2">
	<div class="column width--10">
		<h4 class="h4">Additional</h4>

		<dl class="push-top">
			@foreach ($additional as $name => $hex)
				<dt>{{ $name }}</dt>
					<dd><code>{{ $hex }}</code></dd>
			@endforeach
		</dl>
	</div>

	<div class="column width--14">
		<div class="row flush-first--6">
			@foreach ($additional as $name => $hex)
				<div class="column width--4">
					<div class="placeholder placeholder--square">
						<div style="background-color: {{ $hex }}">
							{{ $name }}
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
