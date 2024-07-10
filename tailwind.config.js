/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "hero-pattern": "url('./images/landing.jpg')",
            },
            fontFamily: {
                oswald: "Oswald",
                poiret: "Poiret One",
                poppins: "Poppins", 
            },
            fontWeight: {
                thin: "100",
                hairline: "100",
                extralight: "200",
                light: "300",
                normal: "400",
                medium: "500",
                semibold: "600",
                bold: "700",
                extrabold: "800",
                "extra-bold": "800",
                black: "900",
            },
        },
    },
    plugins: [],
};

