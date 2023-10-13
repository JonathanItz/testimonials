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
                        href="{{route('board', [$slug])}}"
                        wire:navigate
                        class="text-lg font-medium"
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

                <div class="divider divider-horizontal hidden md:flex"></div>
                <div class="divider divider-vertical md:hidden"></div>

                <div class="w-full">
                    <div class="stat-desc">
                        Testimonial Form
                    </div>
                    <div>
                        <a
                        href="{{route('board.form', [$slug])}}"
                        wire:navigate
                        class="text-lg font-medium"
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
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mt-8">
        <div
        class="stats text-left shadow-md transition-shadow bg-white w-full peer-checked:!shadow-inner peer-checked:!shadow-gray-300"
        >
            <div class="stat">
                <div class="stat-title">All Testimonials</div>
                <div class="stat-value">423</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
        </div>

        <div
        class="stats text-left shadow-md transition-shadow bg-white w-full peer-checked:!shadow-inner peer-checked:!shadow-gray-300"
        >
            <div class="stat">
                <div class="stat-title">Accepted Testimonials</div>
                <div class="stat-value">390</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
        </div>

        <div
        class="stats text-left shadow-md transition-shadow bg-white w-full peer-checked:!shadow-inner peer-checked:!shadow-gray-300"
        >
            <div class="stat">
                <div class="stat-title">Pending Testimonials</div>
                <div class="stat-value">28</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
        </div>
    </div>

    <div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                        <a href="#" class="group inline-flex">
                            Name
                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                            <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </a>
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                        <a href="#" class="group inline-flex">
                            Title
                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                            <span class="ml-2 flex-none rounded bg-gray-100 text-gray-900 group-hover:bg-gray-200">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </a>
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                        <a href="#" class="group inline-flex">
                            Email
                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                            <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </a>
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                        <a href="#" class="group inline-flex">
                            Role
                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                            <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                            <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </span>
                        </a>
                        </th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-0">
                        <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white shadow-md rounded-b-md">
                        <tr class="last-li">
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 _rounded-bl">Lindsay Walton</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm _rounded-br">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                            </td>
                        </tr>

                        <tr class="last-li">
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 _rounded-bl">Lindsay Walton</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm _rounded-br">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>