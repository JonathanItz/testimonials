<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="bg-white">
        <div class="relative isolate overflow-hidden bg-gradient-to-b from-primary/20">
            <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-primary/10 ring-1 ring-primary sm:-mr-80 lg:-mr-96" aria-hidden="true"></div>
            <div class="mx-auto max-w-7xl px-6 py-12 sm:py-28 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                    <div class="max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                        <div>
                            <h1 class="max-w-2xl text-4xl font-bold tracking-widest text-gray-900 sm:text-7xl lg:col-span-2 xl:col-auto">
                                Lemon Bestie
                            </h1>
                            {{-- <h2 class="max-w-2xl text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl lg:col-span-2 xl:col-auto">Elevate Connections with Testimonials</h2> --}}
                        </div>
                        <p class="text-lg leading-6 text-neutral/60 font-display">
                            Lemon Bestie is here to make testimonials easy. With our main focus on testimonials, we believe there's no need to overcomplicate a very important part of your buyers decision making.
                        </p>

                        <h2 class="mt-20 text-neutral text-xl sm:text-2xl">
                            Getting testimonials on your site with 3 steps
                        </h2>
                        <ol class="mt-8 font-medium text-neutral flex flex-col sm:flex-row gap-8 sm:gap-6 text-center">
                            @php
                                $stepClasses = 'bg-accent rounded-xl px-4 pb-4 pt-6 relative flex-0 w-full';
                                $numberClasses = 'absolute -top-5 left-2 rounded-full border border-neutral w-10 h-10 bg-white/50 backdrop-blur-[0.5px] flex items-center justify-center';
                            @endphp
                            <li class="{{$stepClasses}}">
                                <span class="{{$numberClasses}}">
                                    1
                                </span>
                                Register for free
                            </li>
                            <li class="{{$stepClasses}}">
                                <span class="{{$numberClasses}}">
                                    2
                                </span>
                                Copy the iframe on your site
                            </li>
                            <li class="{{$stepClasses}}">
                                <span class="{{$numberClasses}}">
                                    3
                                </span>
                                Sit back and relax
                            </li>
                        </ol>
                        <div class="mt-10 flex items-center gap-x-6">
                            <x-primary-link :link="route('register')" text="Register for free today →" />
                            {{-- <a href="{{route('login')}}" class="text-sm font-semibold leading-6 text-gray-900 focus-visible:outline-secondary group">
                                Login <span class="transition-all inline-block group-hover:translate-x-2" aria-hidden="true">→</span>
                            </a> --}}
                        </div>
                    </div>
                    <img src="{{asset('/assets/images/homepage-images.png')}}" alt="" class="lg:max-w-none max-w-lg mt-10 w-full xl:row-end-2 xl:row-span-2">
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
        <h2 class="text-base font-semibold leading-7 text-primary">Pricing</h2>
        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">The right price for you, whoever you are</p>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Unlock the perfect plan for your testimonial journey with Lemon Bestie's tailored pricing—crafted to match your needs and amplify the impact of your positive experiences.</p>

        <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0">
            {{-- <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 bg-white/60 sm:mx-8 lg:mx-0 rounded-t-3xl sm:rounded-b-none lg:rounded-tr-none lg:rounded-bl-3xl">
                <h3 id="tier-starter" class="text-base font-semibold leading-7 text-primary">Starter</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-bold tracking-tight text-gray-900">Free</span>
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
                        Custom Logo
                    </li>
                </ul>
                <a href="{{'register'}}" aria-describedby="tier-starter" class="mt-8 block rounded-md py-2.5 px-3.5 text-center text-sm font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:mt-10 text-primary ring-1 ring-inset ring-primary hover:ring-primary focus-visible:outline-primary">Get started today</a>
            </div> --}}

            <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 relative bg-gray-900 shadow-2xl">
                <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-primary">Premium</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-bold tracking-tight text-white">$5</span>
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
                <x-primary-link text="Get started today" :link="route('register')" class="w-full block text-center mt-8" aria-describedby="tier-enterprise" />
            </div>

        </div>
    </div>

    <div class="bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative isolate flex flex-col gap-10 overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:flex-row xl:items-center xl:py-32">
            <h2 class="max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl xl:max-w-none xl:flex-auto">Have questions, concerns or requests?</h2>
            <div class="w-full max-w-md">
                <div class="flex flex-col gap-6 text-white">
                    <div>
                        <p>
                            Feel free to reach out to us at
                        </p>
                        <p>
                            <a href="mailto:hello@lemonbestie.com" class="font-semibold text-primary text-2xl hover:underline">hello@lemonbestie.com</a>
                        </p>
                    </div>
                    {{-- <p>
                        We're here to help your testimonials shine!
                    </p> --}}
                </div>
                {{-- <p class="mt-4 text-sm leading-6 text-gray-300">We care about your data. Read our <a href="#" class="font-semibold text-white">privacy&nbsp;policy</a>.</p> --}}
            </div>
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" stop-opacity="0" />
                    </radialGradient>
                </defs>
            </svg>
        </div>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">What Sets Us Apart</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">At Lemon Bestie, we stand out by offering seamless integration, trust-building capabilities through authentic testimonials, a user-friendly platform, and customizable options to enhance your brand's online presence effortlessly.</p>
            </div>
            <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none">
                <div>
                <dt class="font-semibold text-gray-900">🍋 Seamless Integration.</dt>
                <dd class="mt-1 text-gray-600">Easily embed testimonials on your website using our intuitive iframes, or link to your dedicated testimonial board hosted on Lemon Bestie.</dd>
                </div>
                <div>
                <dt class="font-semibold text-gray-900">🍋 Build Trust.</dt>
                <dd class="mt-1 text-gray-600">Leverage the positive experiences of your clients and customers to build trust with potential prospects. Authentic testimonials speak volumes.</dd>
                </div>
                <div>
                <dt class="font-semibold text-gray-900">🍋 User-Friendly Platform.</dt>
                <dd class="mt-1 text-gray-600">Our user-friendly platform ensures that collecting, managing, and displaying testimonials is a hassle-free experience. No tech headaches, just results.</dd>
                </div>
                <div>
                <dt class="font-semibold text-gray-900">🍋 Customization Options.</dt>
                <dd class="mt-1 text-gray-600">Tailor the appearance of your testimonials to match your brand. We provide customization options to make sure your testimonials look and feel just right.</dd>
                </div>
                {{-- <div>
                <dt class="font-semibold text-gray-900">Powerful API.</dt>
                <dd class="mt-1 text-gray-600">Sit minus expedita quam in ullam molestiae dignissimos in harum. Tenetur dolorem iure. Non nesciunt dolorem veniam necessitatibus laboriosam voluptas perspiciatis error.</dd>
                </div>
                <div>
                <dt class="font-semibold text-gray-900">Database backups.</dt>
                <dd class="mt-1 text-gray-600">Ipsa in earum deserunt aut. Quos minus aut animi et soluta. Ipsum dicta ut quia eius. Possimus reprehenderit iste aspernatur ut est velit consequatur distinctio.</dd> --}}
                </div>
            </dl>
        </div>
    </div>

    <footer class="bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 text-center space-y-2">
            <div>
                Reach out here 👉 <a href="mailto:hello@lemonbestie.com" class="font-semibold hover:underline">hello@lemonbestie.com</a>
            </div>
            <div>
                Copyright © {{now()->format('Y')}}.
            </div>
        </div>
    </footer>
</x-app-layout>
