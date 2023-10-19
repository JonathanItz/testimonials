<li class="relative flex items-center space-x-4 py-4">
    <div class="min-w-0 flex-auto">
        <div class="flex items-center gap-x-3">
        <div class="flex-none rounded-full p-1 text-yellow-500 bg-yellow-100/10">
            <div class="h-2 w-2 rounded-full bg-current"></div>
        </div>
        <h2 class="min-w-0 text-sm font-semibold leading-6 text-black">
            <a wire:navigate href="{{route('testimonial.edit', $testimonial->id)}}" class="flex gap-x-2">
                <span class="truncate">{{$testimonial->full_name}}</span>
                @if ($testimonial->job_position)
                    <span class="text-gray-400">/</span>
                    <span class="whitespace-nowrap">{{$testimonial->job_position}}</span>
                @endif
                <span class="absolute inset-0"></span>
            </a>
        </h2>
        </div>
        <div class="mt-3 inline-flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
            {{-- <p class="truncate">{{$testimonial->email}}</p> --}}
            @if ($testimonial->company)
                {{-- <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                    <circle cx="1" cy="1" r="1" />
                </svg> --}}
                <p class="whitespace-nowrap">{{$testimonial->company}}</p>
            @endif
        </div>
    </div>
    <div class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-yellow-500 bg-yellow-400/10 ring-yellow-400/20">Pending</div>
    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
    </svg>
</li>