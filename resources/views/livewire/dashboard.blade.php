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
        <div class="card w-full shadow-md bg-white">
            <div class="card-body">
                <ul role="list" class="divide-y divide-white/5">
                    <li class="relative flex items-center space-x-4 py-4">
                    <div class="min-w-0 flex-auto">
                        <div class="flex items-center gap-x-3">
                        <div class="flex-none rounded-full p-1 text-gray-500 bg-gray-100/10">
                            <div class="h-2 w-2 rounded-full bg-current"></div>
                        </div>
                        <h2 class="min-w-0 text-sm font-semibold leading-6 text-black">
                            <a href="#" class="flex gap-x-2">
                            <span class="truncate">John Doe</span>
                            <span class="text-gray-400">/</span>
                            <span class="whitespace-nowrap">ios-app</span>
                            <span class="absolute inset-0"></span>
                            </a>
                        </h2>
                        </div>
                        <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                        <p class="truncate">Deploys from GitHub</p>
                        <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <p class="whitespace-nowrap">Initiated 1m 32s ago</p>
                        </div>
                    </div>
                    <div class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-emerald-400 bg-emerald-400/10 ring-emerald-400/20">Active</div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                    </li>
                    <li class="relative flex items-center space-x-4 py-4">
                    <div class="min-w-0 flex-auto">
                        <div class="flex items-center gap-x-3">
                        <div class="flex-none rounded-full p-1 text-green-400 bg-green-400/10">
                            <div class="h-2 w-2 rounded-full bg-current"></div>
                        </div>
                        <h2 class="min-w-0 text-sm font-semibold leading-6 text-black">
                            <a href="#" class="flex gap-x-2">
                            <span class="truncate">John Doe</span>
                            <span class="text-gray-400">/</span>
                            <span class="whitespace-nowrap">mobile-api</span>
                            <span class="absolute inset-0"></span>
                            </a>
                        </h2>
                        </div>
                        <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                        <p class="truncate">Deploys from GitHub</p>
                        <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <p class="whitespace-nowrap">Deployed 3m ago</p>
                        </div>
                    </div>
                    <div class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-red-400 bg-red-400/10 ring-red-400/30">Declined</div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                    </li>
                    <li class="relative flex items-center space-x-4 py-4">
                    <div class="min-w-0 flex-auto">
                        <div class="flex items-center gap-x-3">
                        <div class="flex-none rounded-full p-1 text-gray-500 bg-gray-100/10">
                            <div class="h-2 w-2 rounded-full bg-current"></div>
                        </div>
                        <h2 class="min-w-0 text-sm font-semibold leading-6 text-black">
                            <a href="#" class="flex gap-x-2">
                            <span class="truncate">Tailwind Labs</span>
                            <span class="text-gray-400">/</span>
                            <span class="whitespace-nowrap">tailwindcss.com</span>
                            <span class="absolute inset-0"></span>
                            </a>
                        </h2>
                        </div>
                        <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                        <p class="truncate">Deploys from GitHub</p>
                        <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <p class="whitespace-nowrap">Deployed 3h ago</p>
                        </div>
                    </div>
                    <div class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-emerald-400 bg-emerald-400/10 ring-emerald-400/20">Active</div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                    </li>
                    <li class="relative flex items-center space-x-4 py-4">
                    <div class="min-w-0 flex-auto">
                        <div class="flex items-center gap-x-3">
                        <div class="flex-none rounded-full p-1 text-rose-400 bg-rose-400/10">
                            <div class="h-2 w-2 rounded-full bg-current"></div>
                        </div>
                        <h2 class="min-w-0 text-sm font-semibold leading-6 text-black">
                            <a href="#" class="flex gap-x-2">
                            <span class="truncate">Protocol</span>
                            <span class="text-gray-400">/</span>
                            <span class="whitespace-nowrap">api.protocol.chat</span>
                            <span class="absolute inset-0"></span>
                            </a>
                        </h2>
                        </div>
                        <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                        <p class="truncate">Deploys from GitHub</p>
                        <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <p class="whitespace-nowrap">Failed to deploy 6d ago</p>
                        </div>
                    </div>
                    <div class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-emerald-400 bg-emerald-400/10 ring-emerald-400/20">Active</div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                    </li>
                </ul>
            </div>
        </div>          
    </div>
</div>