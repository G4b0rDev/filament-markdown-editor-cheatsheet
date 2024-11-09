import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import preset from './vendor/filament/filament/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [preset],
    content: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
        './src/**/*.php'
    ],
    theme: {
        extend: {
            //
        },
    },
    plugins: [
        forms,
        typography
    ]
}
