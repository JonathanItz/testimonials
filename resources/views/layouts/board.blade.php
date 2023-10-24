<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-base-100">
    
    @include('partials.head')

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

