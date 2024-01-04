<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="bg-white">
        <div class="relative isolate overflow-hidden bg-gradient-to-b from-primary/20">
            <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-primary/10 ring-1 ring-primary sm:-mr-80 lg:-mr-96" aria-hidden="true"></div>
            <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">Lemon Bestie is changing the way people connect.</h1>
                <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                    <p class="text-lg leading-8 text-gray-600">Unlock the power of authentic testimonials with Lemon Bestie! We understand the impact that genuine feedback can have on your business, and that's why we've created a platform to make collecting and showcasing testimonials a breeze.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                    <a href="{{route('register')}}" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">Get started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 focus-visible:outline-secondary">Learn more <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1567532900872-f4e906cbf06a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&q=80" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                </div>
            </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
        </div>
    </div>         
    
    <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
        <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
        <h2 class="text-base font-semibold leading-7 text-indigo-600">Pricing</h2>
        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">The right price for you, whoever you are</p>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Qui iusto aut est earum eos quae. Eligendi est at nam aliquid ad quo reprehenderit in aliquid fugiat dolorum voluptatibus.</p>

        <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
            <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 bg-white/60 sm:mx-8 lg:mx-0 rounded-t-3xl sm:rounded-b-none lg:rounded-tr-none lg:rounded-bl-3xl">
                <h3 id="tier-hobby" class="text-base font-semibold leading-7 text-primary">Hobby</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-bold tracking-tight text-gray-900">Free</span>
                {{-- <span class="text-base text-gray-500">/month</span> --}}
                </p>
                <p class="mt-6 text-base leading-7 text-gray-600">The perfect plan if you&#039;re just getting started.</p>
                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 sm:mt-10 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        10 accepted testimonials
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Embed testimonials on your website
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Customize board
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        Custom Logo
                    </li>
                </ul>
                <a href="{{'register'}}" aria-describedby="tier-hobby" class="mt-8 block rounded-md py-2.5 px-3.5 text-center text-sm font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:mt-10 text-primary ring-1 ring-inset ring-primary hover:ring-primary focus-visible:outline-primary">Get started today</a>
            </div>

            <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 relative bg-gray-900 shadow-2xl">
                <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-primary">Premium</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-bold tracking-tight text-white">$9.99</span>
                <span class="text-base text-gray-400">/month</span>
                </p>
                <p class="mt-6 text-base leading-7 text-gray-300">Dedicated support and infrastructure for your company.</p>
                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 sm:mt-10 text-gray-300">
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Unlimited accepted testimonials
                </li>
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Embed testimonials on your website
                </li>
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Customize board
                </li>
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Custom Logo
                </li>
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Customize testimonials
                </li>
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Edit testimonials
                </li>
                </ul>
                <a href="{{route('register')}}" aria-describedby="tier-enterprise" class="mt-8 block rounded-md py-2.5 px-3.5 text-center text-sm font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:mt-10 bg-primary text-white shadow-sm hover:bg-primary focus-visible:outline-primary">Get started today</a>
            </div>

        </div>
    </div>

</x-app-layout>
