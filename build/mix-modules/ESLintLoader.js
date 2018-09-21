const AutomaticComponent = require('laravel-mix/src/components/AutomaticComponent');

module.exports = class SassJsonLoader extends AutomaticComponent {
    /**
     * Rules to be merged with the master webpack loaders.
     *
     * @return {Array|Object}
     */
    webpackRules() {
        return {
            enforce: 'pre',
            exclude: /node_modules/,
            loader: 'eslint-loader',
            options: {
                configFile: 'build/.eslintrc',
            },
            test: /\.js$/,
        };
    }
};
