<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Import CSS from assets -->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icons/tabler-icons/fonts') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icons/tabler-icons/tabler-icons.css') }}">

        <!-- Vite for Tailwind and Vue -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.ts')
        
        @inertiaHead
    </head>
    <body>
        @inertia

        <!-- Import JS from assets -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>

        <!-- Include libs or external JS if needed -->
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    </body>
</html>
