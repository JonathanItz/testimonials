<div>
    <div class="p-4">
        <div>
            <h4 class="font-semibold">Let's get your iframe ready!</h4>
            <p class="text-gray-700 font-medium">Below are some fake testimonials and some options for you to start customizing your iFrame</p>
        </div>

        <div class="mt-4 grid grid-cols-3 gap-6">
            @foreach ($fakeTestimonials as $testimonial)
                <div class="w-full bg-white border border-gray-100 shadow-md p-6 mb-6 rounded-xl">
                    <div class="flex gap-4">
                        <div class="shrink-0">
                            <img
                            src="{{$testimonial['image']}}"
                            alt="Example user profile picture"
                            class="rounded-full w-10"
                            >
                        </div>
                
                        <div class="w-full">
                            <h3 class="font-semibold line-clamp-2 text-lg">
                                {{$testimonial['name']}}
                            </h3>
                
                            <div class="text-sm font-medium text-gray-600">
                                <span>
                                    {{$testimonial['position']}}
                                </span>
                                <span class="bg-gray-600 inline-block rounded-full h-0.5 w-0.5 mx-1 relative -top-0.5"></span>
                                <span>
                                    {{$testimonial['company']}}
                                </span>
                            </div>
                        </div>
                    </div>
                
                    <div class="mt-4">
                        <p>
                            {{$testimonial['testimonial']}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<pre class="px-6 text-left overflow-x-auto w-full text-sm bg-neutral text-white py-6"><code class="w-full text-sm" x-ref="iframeCode" x-html="$wire.iframeCode"></code></pre>

    <div class="py-4 px-6 flex gap-4 flex-col md:flex-row md:items-center justify-between">
        <span class="text-sm font-medium">
            Copy and paste this code onto your website to show testimonials
        </span>

        <div class="flex gap-1 items-center">
            <span class="text-xs font-medium" x-ref="iframeCopied" style="display:none;">copied!</span>
            <button
            class="flex items-center bg-secondary p-2 rounded-full text-white"
            type="button"
            x-on:click="
                copy($refs.iframeCode.innerText)
                show($refs.iframeCopied)
            "
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                </svg>
            </button>
        </div>
    </div>
</div>
