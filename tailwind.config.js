const config = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css",
        "./resources/js/*.js",
        "./node_modules/xtendui/src/*.mjs",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#900002",
                secondary: "#FFFF00",
            },
            backgroundImage: {
                homeHero: "url('/public/hero.webp')",
                aankoop: "url('/public/aankoop.webp')",
                car: "url('/public/car.webp')",
                contact: "url('/public/contact-bg.webp')",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
export default config;
