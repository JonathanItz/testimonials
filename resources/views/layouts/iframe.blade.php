<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    @pushOnce('header-scripts')
        <script type="module" src="{{asset('/assets/js/iframe.js')}}"></script>
    @endPushOnce

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

