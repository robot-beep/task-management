<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
        *,
        :before,
        :after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        :before,
        :after {
            --tw-content: ""
        }

        html,
        :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button,
        [role=button] {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0
        }

        .z-0 {
            z-index: 0
        }

        .\!row-span-1 {
            grid-row: span 1 / span 1 !important
        }

        .-mx-3 {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .-ml-px {
            margin-left: -1px
        }

        .ml-3 {
            margin-left: .75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .table {
            display: table
        }

        .grid {
            display: grid
        }

        .\!hidden {
            display: none !important
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-5 {
            width: 1.25rem
        }

        .w-\[calc\(100\%_\+_8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .w-full {
            width: 100%
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .cursor-default {
            cursor: default
        }

        .resize {
            resize: both
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .\!flex-row {
            flex-direction: row !important
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .justify-items-center {
            justify-items: center
        }

        .gap-2 {
            gap: .5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-md {
            border-radius: .375rem
        }

        .rounded-sm {
            border-radius: .125rem
        }

        .rounded-l-md {
            border-top-left-radius: .375rem;
            border-bottom-left-radius: .375rem
        }

        .rounded-r-md {
            border-top-right-radius: .375rem;
            border-bottom-right-radius: .375rem
        }

        .border {
            border-width: 1px
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: #ff2d201a
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .to-zinc-900 {
            --tw-gradient-to: #18181b var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #ff2d20
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover
        }

        .object-top {
            -o-object-position: top;
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .pt-3 {
            padding-top: .75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: .875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-5 {
            line-height: 1.25rem
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity, 1))
        }

        .text-black\/50 {
            color: #00000080
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .underline {
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
        }

        .ring-gray-300 {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / .05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .filter {
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .duration-150 {
            transition-duration: .15s
        }

        .duration-300 {
            transition-duration: .3s
        }

        .ease-in-out {
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .selection\:bg-\[\#FF2D20\] *::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:text-white *::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\]::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:text-white::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity, 1))
        }

        .hover\:text-black\/70:hover {
            color: #000000b3
        }

        .hover\:text-gray-400:hover {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity, 1))
        }

        .hover\:text-gray-500:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / .2)
        }

        .focus\:z-10:focus {
            z-index: 10
        }

        .focus\:border-blue-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus\:ring:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
        }

        .active\:bg-gray-100:active {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
        }

        .active\:text-gray-500:active {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .active\:text-gray-700:active {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        @media (min-width: 640px) {
            .sm\:flex {
                display: flex
            }

            .sm\:hidden {
                display: none
            }

            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:flex-1 {
                flex: 1 1 0%
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity, 1))
            }
        }

        .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
            flex-direction: row-reverse
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:border-gray-600 {
                --tw-border-opacity: 1;
                border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
            }

            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .dark\:text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity, 1))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .dark\:text-white\/50 {
                color: #ffffff80
            }

            .dark\:text-white\/70 {
                color: #ffffffb3
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
            }

            .dark\:hover\:text-gray-300:hover {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .dark\:hover\:text-white\/70:hover {
                color: #ffffffb3
            }

            .dark\:hover\:text-white\/80:hover {
                color: #fffc
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
            }

            .dark\:focus\:border-blue-700:focus {
                --tw-border-opacity: 1;
                border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
            }

            .dark\:focus\:border-blue-800:focus {
                --tw-border-opacity: 1;
                border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .dark\:active\:bg-gray-700:active {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
            }

            .dark\:active\:text-gray-300:active {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }
        }
    </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 460 460" style="enable-background:new 0 0 460 460;" xml:space="preserve">
                            <g id="XMLID_1526_">
                                <g id="Sheet_3">
                                    <path id="XMLID_996_" style="fill:#AAAFAD;" d="M403.318,13.736l42.929,42.874C455.053,65.404,460,77.333,460,89.77v226.781
			c0,12.95-10.512,23.448-23.478,23.448H213.478C200.512,340,190,329.503,190,316.552V23.448C190,10.498,200.512,0,213.478,0
			h156.636C382.568,0,394.512,4.941,403.318,13.736z" />
                                    <path id="XMLID_997_" style="fill:#C3C9C7;" d="M366.087,46.897V0h4.029c12.454,0,24.397,4.941,33.203,13.736l42.928,42.873
			C455.053,65.404,460,77.332,460,89.77v4.023h-46.957C387.11,93.793,366.087,72.797,366.087,46.897z" />
                                </g>
                                <g id="Sheet_2">
                                    <path id="XMLID_995_" style="fill:#8A8E8C;" d="M376.066,163.333L395,340h-30V153.39l0,0
			C370.687,153.39,375.46,157.678,376.066,163.333z" />
                                    <path id="XMLID_993_" style="fill:#C3C9C7;" d="M308.318,73.736l42.929,42.874c8.806,8.794,13.753,20.723,13.753,33.16v226.781
			c0,12.95-10.512,23.448-23.478,23.448H118.478C105.512,400,95,389.503,95,376.552V83.448C95,70.498,105.512,60,118.478,60h156.636
			C287.568,60,299.512,64.941,308.318,73.736z" />
                                    <path id="XMLID_994_" style="fill:#D2D6D5;" d="M271.087,106.897V60h4.029c12.454,0,24.397,4.941,33.203,13.736l42.928,42.873
			C360.053,125.404,365,137.332,365,149.77v4.023h-46.957C292.11,153.793,271.087,132.797,271.087,106.897z" />
                                </g>
                                <g id="Sheet_1">
                                    <path id="XMLID_991_" style="fill:#AAAFAD;" d="M281.066,223.333L300,400h-30V213.39l0,0
			C275.687,213.39,280.46,217.678,281.066,223.333z" />
                                    <path id="XMLID_984_" style="fill:#E0E0E0;" d="M213.318,133.736l42.929,42.874c8.806,8.794,13.753,20.723,13.753,33.16v226.781
			c0,12.95-10.512,23.448-23.478,23.448H23.478C10.512,460,0,449.503,0,436.552V143.448C0,130.498,10.512,120,23.478,120h156.636
			C192.568,120,204.512,124.941,213.318,133.736z" />
                                    <path id="XMLID_985_" style="fill:#F2F2F2;" d="M176.087,166.897V120h4.029c12.454,0,24.397,4.941,33.203,13.736l42.928,42.873
			C265.053,185.404,270,197.332,270,209.77v4.023h-46.957C197.11,213.793,176.087,192.797,176.087,166.897z" />
                                </g>
                                <g id="Print_1_">
                                    <path id="XMLID_983_" style="fill:#F49638;" d="M146.535,379.197L146.535,379.197c-5.716,5.716-14.985,5.716-20.701,0
			l-28.982-28.982c-5.716-5.716-5.716-14.985,0-20.701l0,0c5.716-5.716,14.985-5.716,20.701,0l28.982,28.982
			C152.251,364.211,152.251,373.479,146.535,379.197z" />
                                    <path id="XMLID_981_" style="fill:#AD1251;" d="M175.517,366.775L175.517,366.775c-5.717,5.716-14.985,5.716-20.701,0
			l-62.104-62.104c-5.716-5.716-5.716-14.985,0-20.701l0,0c5.716-5.716,14.985-5.716,20.701,0l62.104,62.104
			C181.233,351.79,181.233,361.059,175.517,366.775z" />
                                    <path id="XMLID_980_" style="fill:#7FA3BA;" d="M179.657,329.513L179.657,329.513c-5.716,5.716-14.985,5.716-20.701,0
			l-62.104-62.104c-5.716-5.716-5.716-14.985,0-20.701l0,0c5.716-5.716,14.985-5.716,20.701,0l62.104,62.104
			C185.373,314.529,185.373,323.796,179.657,329.513z" />
                                    <path id="XMLID_979_" style="fill:#E25C56;" d="M175.517,283.97L175.517,283.97c-5.717,5.716-14.985,5.716-20.701,0
			l-28.982-28.982c-5.716-5.716-5.716-14.985,0-20.701l0,0c5.716-5.716,14.985-5.716,20.701,0l28.982,28.982
			C181.233,268.986,181.233,278.254,175.517,283.97z" />
                                    <path id="XMLID_982_" style="fill:#F49638;" d="M76.151,308.813L76.151,308.813c-5.716,5.716-14.985,5.716-20.701,0l0,0
			c-5.716-5.716-5.716-14.985,0-20.701l0,0c5.716-5.716,14.985-5.716,20.701,0l0,0C81.867,293.827,81.867,303.095,76.151,308.813z" />
                                    <path id="XMLID_87_" style="fill:#E25C56;" d="M216.919,325.373L216.919,325.373c-5.716,5.716-14.985,5.716-20.701,0l0,0
			c-5.716-5.716-5.716-14.985,0-20.701l0,0c5.716-5.716,14.985-5.716,20.701,0l0,0C222.635,310.388,222.635,319.656,216.919,325.373
			z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                        @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                        @endif
                        @endauth
                    </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <main class="mt-6">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold text-gray-800 dark:text-white">
                                La Mejor Aplicación para Gestionar Tareas del Mundo
                            </h1>
                            <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
                                Organiza tus tareas de manera eficiente, colabora con tu equipo y alcanza tus metas con nuestra potente herramienta de gestión de tareas.
                            </p>
                            <div class="mt-8">
                                <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-[#FF2D20] text-white font-semibold rounded-lg hover:bg-[#FF2D20]/90 transition duration-300">
                                    Comienza Ahora
                                </a>
                            </div>
                        </div>
                    </main>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</body>

</html>