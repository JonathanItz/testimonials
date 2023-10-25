<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    @include('partials.head')

    <body class="font-sans antialiased">
        <main>
            {{ $slot }}
        </main>

        @livewireScripts
    </body>
</html>

