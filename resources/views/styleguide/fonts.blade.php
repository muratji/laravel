@foreach ($families as $name => $family)
	<div class="push-top--large row flush-first--2">
		<div class="column width--10">
			<dl>
				<dt>Family</dt>
					<dd>{{ $name }}</dd>
				<dt>Styles</dt>
					<dd>
						<ul>
							@foreach ($family['styles'] as $style)
								<li>{{ $style }}</li>
							@endforeach
						</ul>
					</dd>
				<dt>Source</dt>
					<dd><a href="{{ $family['source']['url'] }}">{{ $family['source']['name'] }}</a></dd>
			</dl>
		</div>

		<div class="column width--14">
			<div>
				<div class="h1">Aa</div>

				<div class="h3">{{ $name }}</div>
			</div>
		</div>
	</div>
@endforeach
