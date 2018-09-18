@foreach ($featured as $name => $colour)
	@component('styleguide.component', ['title' => $name])
		<div class="s-grid">
			<div class="s-grid__item s-colours__base">
				<div class="s-colour" style="background-color: {{ $colour['hex'] }}">
					<div class="s-colour__inner">
						<span>Base</span>

						<code>{{ $colour['hex'] }}</code>
					</div>
				</div>
			</div>

			<div class="s-grid__item s-colours__variants">
				<div class="s-grid">
					@foreach ($colour['variants'] as $name => $hex)
						<div class="s-grid__item s-colour-wrapper--secondary">
							<div class="s-colour" style="background-color: {{ $hex }}">
								<div class="s-colour__inner">
									<span>{{ $name }}</span>

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

@component('styleguide.component', ['title' => 'Additional'])
	<div class="s-grid">
		@foreach ($additional as $name => $hex)
			<div class="s-grid__item s-colour-wrapper--tertiary">
				<div class="s-colour" style="background-color: {{ $hex }}">
					<div class="s-colour__inner">
						<span>{{ $name }}</span>

						<code>{{ $hex }}</code>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endcomponent
