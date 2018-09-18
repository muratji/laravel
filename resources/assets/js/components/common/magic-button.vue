<template>
	<button
		class="button"
		:class="classes"
		:disabled="$props.disabled"
		v-text="$props.cta" />
</template>

<script>
	export default {
		props: {
			cta: String,
			disabled: Boolean,
			size: String,
			type: String,
		},

		computed: {
			classes() {
				return {
					[`button--${this.$props.size}`]: this.$props.size,
					[`button--${this.$props.type}`]: this.$props.type,
				};
			},
		},
	};
</script>
