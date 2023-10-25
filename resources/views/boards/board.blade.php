<x-board-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

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

    <div class="py-12">
        <div class="max-w-7xl mx-auto md:px-6 lg:px-8">
            @if (! $testimonails->isEmpty())
                <div
                    id="grid-container"
                    class="-mx-3 opacity"
                    x-cloak
                    x-init="
                        msnry = new Masonry( $el, {
                            transitionDuration: 0
                        });
                    "
                >
                    @foreach ($testimonails as $testimonail)
                        @include('partials.testimonials.testimonial')
                    @endforeach
                </div>
            @else
                <div class="text-center min-h-full">
                    <div>
                        <h2 class="font-semibold text-2xl">No Testimonials Yet!</h2>

                        <div class="mt-2">
                            Be the first to add a testimonial <a href="{{route('board.form', [$slug])}}" wire:navigate class="text-accent underline">here</a>.
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-board-layout>
