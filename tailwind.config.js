/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./Modules/**/Resources/**/*.vue",
        "./Modules/**/Resources/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
