import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: "#f8f9ff",
                    100: "#f1f3ff",
                    200: "#e2e6ff",
                    300: "#c6ccff",
                    400: "#9aa5ff",
                    500: "#6e7eff",
                    600: "#5f6fe6",
                    700: "#4f5abf",
                    800: "#3f4599",
                    900: "#333a80",
                },
                secondary: {
                    50: "#f8f9ff",
                    100: "#f1f3ff",
                    200: "#e2e6ff",
                    300: "#c6ccff",
                    400: "#9aa5ff",
                    500: "#6e7eff",
                    600: "#5f6fe6",
                    700: "#4f5abf",
                    800: "#3f4599",
                    900: "#333a80",
                },
                tertiary: {
                    50: "#f8f9ff",
                    100: "#f1f3ff",
                    200: "#e2e6ff",
                    300: "#c6ccff",
                    400: "#9aa5ff",
                    500: "#6e7eff",
                    600: "#5f6fe6",
                    700: "#4f5abf",
                    800: "#3f4599",
                    900: "#333a80",
                },
            },
        },
    },
    plugins: [],
};
