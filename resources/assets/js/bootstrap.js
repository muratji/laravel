import 'what-input';

import axios from 'axios';
import Lang from 'lang.js';
import lodash from 'lodash';
import objectFitImages from 'object-fit-images';

import messages from './i18n';

window._ = lodash;
objectFitImages();

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
	window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
	console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.trans = new Lang({
	messages,
	locale: 'en-gb',
	fallback: 'en-gb',
});
