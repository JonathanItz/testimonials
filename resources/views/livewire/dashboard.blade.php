<div>
    <x-slot name="header">
        <div class="flex justify-between flex-col md:flex-row gap-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $name }} Board
            </h2>

            <div>
                <a href="{{route('testimonial.settings', [$slug])}}" wire:navigate class="group flex items-center gap-2 text-neutral">
                    <span>
                        Board settings
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 group-hover:rotate-45 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                      
                </a>
            </div>
        </div>
    </x-slot>

    <div class="p-6 rounded-xl w-full shadow-md bg-white">
        <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="w-full">
                <div class="text-gray-500 font-medium text-xs">
                    Testimonial Board
                </div>
                <div>
                    <a
                    href="{{route('board', [$slug])}}"
                    wire:navigate
                    class="text-lg font-medium line-clamp-2 break-all"
                    >
                        {{route('board', [$slug])}}
                    </a>
                </div>

                <div class="flex gap-4 mt-2">
                    <a
                    href="{{route('board', [$slug])}}"
                    target="_blank"
                    class="inline-block bg-primary p-2 rounded-full text-white"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>                              
                    </a>

                    <div class="flex gap-1 items-center">
                        <button
                        class="flex items-center bg-secondary p-2 rounded-full text-white"
                        type="button"
                        x-on:click="copy('{{route('board', [$slug])}}');show($refs.boardCopied)"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                            </svg>
                        </button>
                        <span class="text-xs font-medium" x-ref="boardCopied" style="display:none;">copied!</span>
                    </div>
                </div>
            </div>

            <div>
                <div class="bg-gray-100 w-full md:w-[2px] h-[2px] md:h-full rounded-full flex"></div>
            </div>

            <div class="w-full">
                <div class="text-gray-500 font-medium text-xs">
                    Testimonial Form
                </div>
                <div>
                    <a
                    href="{{route('board.form', [$slug])}}"
                    wire:navigate
                    class="text-lg font-medium line-clamp-2 break-all"
                    >
                        {{route('board.form', [$slug])}}
                    </a>
                </div>

                <div class="flex gap-4 mt-2">
                    <a
                    href="{{route('board.form', [$slug])}}"
                    target="_blank"
                    class="inline-block bg-primary p-2 rounded-full text-white"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>                              
                    </a>

                    <div class="flex gap-1 items-center">
                        <button
                        class="flex items-center bg-secondary p-2 rounded-full text-white"
                        type="button"
                        x-on:click="copy('{{route('board.form', [$slug])}}');show($refs.formCopied)"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                            </svg>
                        </button>
                        <span class="text-xs font-medium" x-ref="formCopied" style="display:none;">copied!</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 md:gap-6 mt-6 md:mt-8 bg-gray-100 md:bg-transparent rounded-xl border border-gray-200 md:border-none">
            @php
                $cardClasses = 'px-4 py-3 rounded-xl text-left md:border md:border-gray-200 md:bg-gray-100 w-full';
            @endphp
            <div
            class="{{$cardClasses}}"
            >
                <div class="stat">
                    <div class="text-gray-500 font-medium text-xs">All Testimonials</div>
                    <div class="text-2xl md:text-4xl font-black text-neutral">{{$total}}</div>
                    {{-- <div class="text-xs font-medium text-gray-500">21% more than last month</div> --}}
                </div>
            </div>
    
            <div
            class="{{$cardClasses}}"
            >
                <div class="stat">
                    <div class="text-gray-500 font-medium text-xs">Accepted Testimonials</div>
                    <div class="text-2xl md:text-4xl font-black text-neutral">{{$accepted}}</div>
                    {{-- <div class="text-xs font-medium text-gray-500">21% more than last month</div> --}}
                </div>
            </div>
    
            <div
            class="{{$cardClasses}}"
            >
                <div class="stat">
                    <div class="text-gray-500 font-medium text-xs">Pending Testimonials</div>
                    <div class="text-2xl md:text-4xl font-black text-neutral">{{$pending}}</div>
                    {{-- <div class="text-xs font-medium text-gray-500">21% more than last month</div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12 grid grid-cols-12 gap-6">
        @php
            $labelClasses = 'peer-checked:bg-neutral peer-checked:text-white hover:bg-gray-200 text-neutral transition-colors rounded-md px-3 py-1 flex justify-between cursor-pointer';
        @endphp

        <div class="col-span-4 lg:col-span-3 gap-2 hidden md:block space-y-2">
            <div class="w-full">
                <input wire:model.live="status" value="" type="radio" class="hidden peer" id="all">
                <label class="{{$labelClasses}}" for="all">
                    <span class="font-medium">Show All</span> <span class="font-black">{{$total}}</span>
                </label>
            </div>

            <div class="w-full">
                <input wire:model.live="status" value="accepted" type="radio" class="hidden peer" id="accepted">
                <label class="{{$labelClasses}}" for="accepted">
                    <span class="font-medium">Accepted</span> <span class="font-black">{{$accepted}}</span>
                </label>
            </div>

            <div class="w-full">
                <input wire:model.live="status" value="pending" type="radio" class="hidden peer" id="pending">
                <label class="{{$labelClasses}}" for="pending">
                    <span class="font-medium">Pending</span> <span class="font-black">{{$pending}}</span>
                </label>
            </div>

            <div class="w-full">
                <input wire:model.live="status" value="declined" type="radio" class="hidden peer" id="declined">
                <label class="{{$labelClasses}}" for="declined">
                    <span class="font-medium">Declined</span> <span class="font-black">{{$declined}}</span>
                </label>
            </div>
        </div>

        <div class="col-span-12 md:col-span-8 lg:col-span-9">
            <div id="testimonials" class="p-6 rounded-xl w-full shadow-md bg-white">
                <div class="card-body">
                    <div class="max-w-sm mb-2 md:hidden">
                        <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                        <select wire:model.live="status" id="status" name="status" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6">
                            <option value="">Show All</option>
                            <option value="pending">Pending</option>
                            <option value="accepted">Accepted</option>
                            <option value="declined">Declined</option>
                        </select>
                    </div>
                    @if (!$testimonials->isEmpty())
                        <ul role="list" class="divide-y divide-white/5">
                            @foreach ($testimonials as $testimonial)
                                @if ($testimonial->status === 'pending')
                                    <x-pending-testimonial :testimonial="$testimonial" />
                                @elseif($testimonial->status === 'accepted')
                                    <x-accepted-testimonial :testimonial="$testimonial" />
                                @elseif($testimonial->status === 'declined')
                                    <x-declined-testimonial :testimonial="$testimonial" />
                                @endif
                            @endforeach
                        </ul>
    
                        {{ $testimonials->links(data: ['scrollTo' => '#testimonials']) }}
                    @else
                        <div class="text-center">
                            No testimonials have been submitted.
                        </div>
                    @endif
                </div>
            </div>      
        </div>
    </div>
</div>