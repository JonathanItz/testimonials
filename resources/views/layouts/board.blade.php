<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-base-100">
    
    @include('partials.head')

    <body class="font-sans antialiased page-{{request()->route()->getName()}}">
        <!-- Page Content -->
        <main class="min-h-screen">
            {{ $slot }}
        </main>

    @livewireScripts
    </body>
</html>

