<div>
    @if (! $testimonails->isEmpty())
        <div
            id="grid-container"
            class="-mx-3 opacity -mb-6"
            x-cloak
            x-init="
                msnry = new Masonry( $el, {
                    transitionDuration: 0,
                    gutter: 24
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
                    Be the first to add a testimonial
                    <a
                        href="{{route('board.form', [$slug])}}"
                        @if(!isset($isIframe) && !$isIframe)
                            wire:navigate
                        @else
                            target="_parent"
                        @endif
                        class="text-accent underline inline-flex items-center gap-1"
                    >
                        <span>here</span>
                        @if(isset($isIframe) && $isIframe)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                      @endif
                    </a>.
                </div>
            </div>
        </div>
    @endif
</div>