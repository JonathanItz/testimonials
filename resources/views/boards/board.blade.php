<x-board-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (! $testimonails->isEmpty())
                <div class="grid grid-cols-3 gap-6">
                    @foreach ($testimonails as $testimonail)
                        <div class="bg-white rounded-xl shadow-md px-6 py-4">
                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <img
                                    src="{{$testimonail->image_to_use}}"
                                    alt="User profile picture"
                                    class="rounded-full w-10"
                                    >
                                </div>
    
                                <div class="w-full">
                                    <h3 class="font-semibold line-clamp-2">
                                        {{$testimonail->full_name}}
                                    </h3>
    
                                    @if ($testimonail->job_position || $testimonail->company)
                                        <div class="text-sm font-medium flex items-center gap-2 mt-2 text-gray-600">
                                            <span>
                                                {{$testimonail->job_position}}
                                            </span>
                                            <span class="bg-gray-300 rounded-full h-0.5 w-0.5"></span>
                                            <span>
                                                {{$testimonail->company}}
                                            </span>
                                        </div>
                                    @endif
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
