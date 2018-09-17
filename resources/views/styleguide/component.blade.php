<div class="push-top--large">
	<h3 class="h3">{{ $title }}</h3>

	<div class="push-top--small row flush-first--2">
		<div class="column width--10">
			@if ($meta ?? false)
				<dl class="push-top">
					@foreach ($meta as $key => $value)
						<dt>{{ $key }}</dt>
						<dd>
							@if (is_array($value))
								@if ($value['url'] ?? false)
									<a href="{{ $value['url'] }}">{{ $value['copy'] }}</a>
								@else
									<ul>
										@foreach ($value as $item)
											<li>{{ $item }}</li>
										@endforeach
									</ul>
								@endif
							@else
								{{ $value }}
							@endif
						</dd>
					@endforeach
				</dl>
			@else
				&nbsp;
			@endif
		</div>

		<div class="column width--14">
			{{ $slot }}
		</div>
	</div>
</div>
