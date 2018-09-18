@foreach ($featured as $name => $colours)
	@component('styleguide.component', [
		'title' => $name,
		'meta' => $colours,
	])
		<div class="s-grid">
			<div class="s-grid__item s-colours__base">
				<div class="s-colour" style="background-color: {{ current($colours) }}">
					<div class="s-colour__inner">{{ key($colours) }}</div>
				</div>
			</div>

			<div class="s-grid__item s-colours__variants">
				<div class="s-grid">
					@foreach ($colours as $name => $hex)
						@if (!$loop->first)
							<div class="s-grid__item s-colour-wrapper--secondary">
								<div class="s-colour" style="background-color: {{ $hex }}">
									<div class="s-colour__inner">{{ $name }}</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
	@endcomponent
@endforeach

@component('styleguide.component', ['title' => 'Additional'])
	<div class="s-grid">
		@foreach ($additional as $name => $hex)
			<div class="s-grid__item s-colour-wrapper--tertiary">
				<div class="s-colour" style="background-color: {{ $hex }}">
					<div class="s-colour__inner">{{ $name }}</div>
				</div>
			</div>
		@endforeach
	</div>
@endcomponent
