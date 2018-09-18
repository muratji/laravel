<template>
	<button class="button"
		:class="classes"
		:disabled="$props.disabled"
		v-text="$props.cta" />
</template>

<script>
	const classes = {
		sizes: {
			small: 'button--small',
			medium: null,
			large: 'button--large',
		},
		types: {
			primary: null,
			secondary: 'button--secondary',
			positive: 'button--positive',
			negative: 'button--negative',
		},
	};

	export default {
		props: {
			cta: {
				type: String,
				required: true,
			},
			disabled: {
				type: Boolean,
			},
			size: {
				type: String,
				default: 'medium',
				validator: size => Object.keys(classes.sizes).includes(size),
			},
			type: {
				type: String,
				default: 'primary',
				validator: type => Object.keys(classes.types).includes(type),
			},
		},

		computed: {
			classes() {
				return {
					[classes.sizes[this.$props.size]]: this.$props.size,
					[classes.types[this.$props.type]]: this.$props.type,
				};
			},
		},
	};

</script>
