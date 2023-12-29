<div class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.3%-1rem)] bg-white border border-gray-100 shadow-md p-6 mb-6 {{$radius}}">
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
                    @if ($testimonail->job_position)
                        <span>
                            {{$testimonail->job_position}}
                        </span>
                        <span class="bg-gray-600 inline-block rounded-full h-0.5 w-0.5 mx-1 relative -top-0.5"></span>
                    @endif
                    <span>
                        {{$testimonail->company}}
                    </span>
                </div>
            @endif
        </div>
    </div>

    <div class="mt-4">
        <p>
            {{$testimonail->testimonial}}
        </p>
    </div>
</div>