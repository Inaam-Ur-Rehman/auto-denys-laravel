const config = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css",
        "./node_modules/xtendui/src/*.mjs",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#900002",
                secondary: "#FFFF00",
            },
            backgroundImage: {
                aankoop: "url('/public/background.png')",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
export default config;
