<x-board-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (! $testimonails->isEmpty())
                <div
                    id="grid-container"
                    class="-mx-3 opacity"
                    x-cloak
                    x-init="
                        msnry = new Masonry( $el, {

                        });
                    "
                >
                    @foreach ($testimonails as $testimonail)
                        <div class="w-[calc(33.3%-1.5rem)] bg-white rounded-xl shadow-md p-6 m-3">
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
                No Testimonials Found
            @endif
        </div>
    </div>
</x-board-layout>
