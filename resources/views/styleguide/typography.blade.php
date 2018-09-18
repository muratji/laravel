@for ($i = 1; $i <= 6; $i++)
	@component('styleguide.component', [
		'title' => 'Heading ' . $i,
		'meta' => ['Class' => 'h' . $i],
	])
		<p class="h{{ $i }}">In et laborum incididunt qui veniam occaecat velit officia</p>
	@endcomponent
@endfor

@component('styleguide.component', ['title' => 'Paragraph'])
	<p>Amet cillum consequat fugiat magna aute ad veniam ea amet et do anim sit aute. Est velit laboris veniam laborum reprehenderit officia occaecat deserunt ea reprehenderit. Ex ullamco commodo qui cillum amet qui Lorem reprehenderit dolore aliquip. Duis ea culpa consectetur proident mollit eiusmod nulla enim occaecat aliquip adipisicing nostrud cupidatat nisi. Pariatur duis non dolore consectetur sit qui magna irure est duis sit ullamco anim mollit.</p>
@endcomponent
