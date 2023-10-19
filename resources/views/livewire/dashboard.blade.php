<div>
    <div class="card w-full shadow-md bg-white">
        <div class="card-body"
            x-data
        >
            <div class="flex flex-col md:flex-row w-full">
                <div class="w-full">
                    <div class="stat-desc">
                        Testimonial Board
                    </div>
                    <div>
                        <a
                        href="{{route('board', [$uniqueId, $slug])}}"
                        wire:navigate
                        class="text-lg font-medium"
                        >
                            {{route('board', [$uniqueId, $slug])}}
                        </a>
                    </div>

                    <div class="flex gap-4 mt-2">
                        <a
                        href="{{route('board', [$uniqueId, $slug])}}"
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
                            x-on:click="copy('{{route('board', [$uniqueId, $slug])}}');show($refs.boardCopied)"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                                </svg>
                            </button>
                            <span class="text-xs font-medium" x-ref="boardCopied" style="display:none;">copied!</span>
                        </div>
                    </div>
                </div>

                <div class="divider divider-horizontal hidden md:flex"></div>
                <div class="divider divider-vertical md:hidden"></div>

                <div class="w-full">
                    <div class="stat-desc">
                        Testimonial Form
                    </div>
                    <div>
                        <a
                        href="{{route('board.form', [$uniqueId, $slug])}}"
                        wire:navigate
                        class="text-lg font-medium"
                        >
                            {{route('board.form', [$uniqueId, $slug])}}
                        </a>
                    </div>

                    <div class="flex gap-4 mt-2">
                        <a
                        href="{{route('board.form', [$uniqueId, $slug])}}"
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
                            x-on:click="copy('{{route('board.form', [$uniqueId, $slug])}}');show($refs.formCopied)"
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
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mt-8">
        <div
        class="stats text-left shadow-md transition-shadow bg-white w-full peer-checked:!shadow-inner peer-checked:!shadow-gray-300"
        >
            <div class="stat">
                <div class="stat-title">All Testimonials</div>
                <div class="stat-value">{{$total}}</div>
                {{-- <div class="stat-desc">21% more than last month</div> --}}
            </div>
        </div>

        <div
        class="stats text-left shadow-md transition-shadow bg-white w-full peer-checked:!shadow-inner peer-checked:!shadow-gray-300"
        >
            <div class="stat">
                <div class="stat-title">Accepted Testimonials</div>
                <div class="stat-value">{{$accepted}}</div>
                {{-- <div class="stat-desc">21% more than last month</div> --}}
            </div>
        </div>

        <div
        class="stats text-left shadow-md transition-shadow bg-white w-full peer-checked:!shadow-inner peer-checked:!shadow-gray-300"
        >
            <div class="stat">
                <div class="stat-title">Pending Testimonials</div>
                <div class="stat-value">{{$pending}}</div>
                {{-- <div class="stat-desc">21% more than last month</div> --}}
            </div>
        </div>
    </div>

    <div class="mt-12">
        <div id="testimonials" class="card w-full shadow-md bg-white">
            <div class="card-body">
                <div class="max-w-sm mb-2">
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                    <select wire:model.live="status" id="status" name="status" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6">
                        <option value="">Show All</option>
                        <option value="pending">Pending</option>
                        <option value="accepted">Accepted</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>
                @if (!$testimonials->isEmpty())

                    {{-- {{dd($testimonials)}} --}}
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
                    No testimonials found
                @endif
            </div>
        </div>          
    </div>
</div>