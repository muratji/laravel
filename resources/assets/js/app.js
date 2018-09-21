import Vue from 'vue';
import svg4everybody from 'svg4everybody';

import './bootstrap';

import forgotPassword from './components/accounts/forgot-password-form.vue';
import loginForm from './components/accounts/login-form.vue';
import passwordReset from './components/accounts/password-reset-form.vue';
import registerForm from './components/accounts/register-form.vue';

Vue.filter('trans', (...args) => trans.get(...args));

window.app = new Vue({
	el: '#app',

	mounted: () => {
		svg4everybody();
	},

	components: {
		forgotPassword,
		loginForm,
		passwordReset,
		registerForm,
	},
});
