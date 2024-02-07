<x-board-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    @if ($name !== 'Lemon Bestie')
        @slot( 'title' )
            {{ $name }}
        @endslot
    @endif

    @if ($logoUrl)
        <div class="flex justify-center pt-8">
            @if ($websiteUrl)
                <a href="{{$websiteUrl}}">
                    <x-company-logo logoUrl="{{$logoUrl}}" />
                </a>
            @else
                <x-company-logo logoUrl="{{$logoUrl}}" />
            @endif
        </div>
    @endif

    <div class="py-6 md:py-12">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            @include('partials.testimonials.container')
        </div>
    </div>
</x-board-layout>
