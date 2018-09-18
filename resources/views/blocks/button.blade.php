<button
	class="
		button
		{{ $size ?? false ? ('button--' . $size) : '' }}
		{{ $type ?? false ? ('button--' . $type) : '' }}
	"
	{{ $disabled ?? false ? 'disabled' : '' }}>
	{{ $cta }}
</button>
