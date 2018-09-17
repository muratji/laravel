<template>
	<button class="button" :class="[sizeClass, typeClass]" v-text="$props.cta" :disabled="$props.disabled" />
</template>

<script>
	const classes = {
		type: {
			secondary: 'button--secondary',
			positive: 'button--positive',
			negative: 'button--negative',
		},
		size: {
			small: 'button--small',
			large: 'button--large',
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
			},
			type: {
				type: String,
			},
		},

		computed: {
			sizeClass() {
				return classes.size[this.$props.size];
			},
			typeClass() {
				return classes.type[this.$props.type];
			},
		},
	};

</script>
