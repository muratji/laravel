<div class="s-push-top--large s-grid s-component">
	<div class="s-grid__item s-component__meta">
		<h3 class="s-h3">{{ $title }}</h3>

		@if ($meta ?? false)
			<dl class="s-push-top--small s-meta">
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
		@endif
	</div>

	<div class="s-grid__item s-component__preview-wrapper">
		<div class="s-component__preview">
			{{ $slot }}
		</div>
	</div>
</div>
