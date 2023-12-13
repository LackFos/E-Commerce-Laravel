module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    light: "#F6C3C5",
                    DEFAULT: "#FF696E",
                },
            },
            boxShadow: {
                input: "0px 0px 0px 3px #F6C3C5;",
            },
        },
    },
    plugins: [],
};
