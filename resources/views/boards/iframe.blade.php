<x-iframe-layout>
    <div class="p-4 min-h-[4rem] h-full">
        <div>
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
