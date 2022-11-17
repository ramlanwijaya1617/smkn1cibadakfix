const colors = require("tailwindcss/colors");

module.exports = {
    content: ["./resources/js/**/*.js", "./resources/js/**/*.vue"],
    theme: {
        fontFamily: {
            body: ["Poppins", "sans-serif"],
            default: "'Poppins'",
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "2rem",
                sm: "2.5rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "5.5rem",
            },
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
        },
        extend: {
            colors: {
                primary: "#3EC1D3",
                secondary: "#0B161E",
            },
            minHeight: {
                content: "calc(100vh - 96px);",
            },
        },
    },
    variants: {},
    plugins: [],
};
