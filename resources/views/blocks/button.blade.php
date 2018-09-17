<button
	class="
		button
		{{ $size ?? false ? ('button--' . $size) : '' }}
		{{ $type ?? false ? ('button--' . $type) : '' }}
	"
	@if ($disabled ?? false)
		disabled
	@endif
	>
	{{ $cta }}
</button>
