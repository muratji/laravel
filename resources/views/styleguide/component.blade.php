<div class="s-push-top--large">
	<div class="s-grid s-component">
		<div class="s-grid__item s-component__meta">
			<h3 class="s-h3">{{ $title }}</h3>

			@if ($meta ?? false)
				<dl class="s-push-top--small s-meta">
					@foreach ($meta as $key => $value)
						<dt>{{ $key }}</dt>
						<dd>{!! $value !!}</dd>
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
</div>
