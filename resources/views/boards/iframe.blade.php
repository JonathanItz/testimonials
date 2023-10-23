<x-iframe-layout>
    <div>
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
                        <div class="w-full md:w-[calc(50%-1.5rem)] lg:w-[calc(33.3%-1.5rem)] bg-white md:rounded-xl shadow-md p-6 my-1.5 md:my-0 md:mx-3">
                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <img
                                    src="{{$testimonail->image_to_use}}"
                                    alt="User profile picture"
                                    class="rounded-full w-10"
                                    >
                                </div>
    
                                <div class="w-full">
                                    <h3 class="font-semibold line-clamp-2 text-lg">
                                        {{$testimonail->full_name}}
                                    </h3>
    
                                    @if ($testimonail->job_position || $testimonail->company)
                                        <div class="text-sm font-medium text-gray-600">
                                            <span>
                                                {{$testimonail->job_position}}
                                            </span>
                                            <span class="bg-gray-600 inline-block rounded-full h-0.5 w-0.5 mx-1 relative -top-0.5"></span>
                                            <span>
                                                {{$testimonail->company}}
                                            </span>
                                        </div>
                                    @endif

                                    <div class="mt-4">
                                        <p>
                                            {{$testimonail->testimonial}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center fixed inset-0 flex items-center justify-center">
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
