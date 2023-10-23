<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Testimonials') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script type="module" src="{{asset('/assets/js/iframe.js')}}"></script>

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            {{-- <livewire:layout.navigation /> --}}
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

    @livewireScripts
    </body>
</html>

