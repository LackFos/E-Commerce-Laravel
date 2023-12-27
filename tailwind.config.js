module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    light: '#FFF0F1',
                    DEFAULT: '#FF696E',
                },
            },
            boxShadow: {
                input: '0px 0px 0px 3px #F6C3C5;',
            },
        },
    },
    plugins: [],
};
