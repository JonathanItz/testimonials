<div class="p-6 rounded-xl shadow-md bg-white">
    <form wire:submit="submit">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
                <label for="photo" class="text-sm font-medium leading-6 text-gray-900 flex items-center gap-2">
                    <span>Logo</span>
                    @if ($existingLogo || $logo)
                        <button
                        type="button"
                        class="text-xs font-medium bg-gray-100 hover:bg-gray-200 transition-colors rounded-full p-1 text-neutral"
                        wire:click="removeLogo"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </label>
                <div class="mt-2 flex flex-col gap-3">
                    <div class="shrink-0">
                        @if ($existingLogo && ! $logo)
                            <img
                            class="w-32 object-cover rounded-md"
                            src="{{$existingLogo}}"
                            alt="Current company logo"
                            />
                        @else
                            @if ($logo)
                                <img class="w-32 object-cover rounded-md" src="{{$logo->temporaryUrl()}}" alt="Current company logo" />
                            @else
                            <h4 class="text-sm font-medium">No image selected</h4>
                            @endif
                        @endif
                    </div>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input
                        wire:model="logo"
                        type="file" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-primary file:text-white
                        hover:file:bg-primary/80
                        "/>
                    </label>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Board Name</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <input wire:model="company" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Company Name">
                    </div>
                    <span class="text-gray-700 text-xs font-medium">
                        Updating this will change the board URL as well.
                    </span>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website URL</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                        <input wire:model="website" type="text" name="website" id="website" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="www.example.com">
                    </div>
                    <span class="text-gray-700 text-xs font-medium">
                        Add your website URL so users can go back to your website.
                    </span>
                </div>
              </div>
    
            <div class="sm:col-span-4">
                <label for="limit" class="block text-sm font-medium leading-6 text-gray-900">Set Max Character Length of Testimonials</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <input max="1000" min="1" wire:model="testimonialLimit" type="number" name="limit" id="limit" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="500" value="1000" maxlength="1000" minlength="0">
                    </div>
                    <span class="text-gray-700 text-xs font-medium">
                        This number cannot exceed over 1000.
                    </span>
                </div>
            </div>

            <div class="col-span-full mt-8 bg-gray-50 rounded-xl p-6 border border-gray-100">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Testimonial Styles
                </h2>

                @if (! $isSubscribed)
                    <p>
                        <span class="text-xs leading-4 block mt-2 font-medium text-gray-500">To customize testimonial styles, consider <a href="/billing" class="text-neutral font-medium hover:underline">upgrading to our premium subscription</a>.</span>
                    </p>
                @endif

                <div class="mt-4">
                    <label for="limit" class="block text-sm font-medium leading-6 text-gray-900">Border Radius</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                            <select wire:model="radius" {{$isSubscribed ?:'disabled'}} class="{{$isSubscribed ?:'cursor-not-allowed'}} block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                <option value="">No border radius</option>
                                <option value="rounded-md">Small</option>
                                <option value="rounded-lg">Medium</option>
                                <option value="rounded-xl">Large</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="block text-sm font-medium leading-6 text-gray-900">
                        Example Testimonial
                    </h4>
                    <div
                    class="w-full md:w-[calc(50%-0.75rem)] lg:w-[calc(33.3%-1rem)] bg-white border border-gray-100 shadow-md p-6 mt-2"
                    x-bind:class="$wire.radius"
                    >
                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <img
                                src="https://www.gravatar.com/avatar/?d=mp"
                                alt="User profile picture"
                                class="rounded-full w-10"
                                >
                            </div>
                    
                            <div class="w-full">
                                <h3 class="font-semibold line-clamp-2 text-lg">
                                    John Doe
                                </h3>
                    
                                <div class="text-sm font-medium text-gray-600">
                                    <span>
                                        Marketing Manager
                                    </span>
                                    <span class="bg-gray-600 inline-block rounded-full h-0.5 w-0.5 mx-1 relative -top-0.5"></span>
                                    <span>
                                        Example Company
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="mt-4">
                            <p>
                                This is a fake testimonial. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, impedit! Aliquam voluptatem ullam inventore et ex eligendi nulla enim!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 mt-6 rounded-xl border border-red-200 px-6 py-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-6 flex items-center justify-end gap-x-6">
            {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
            <button type="submit" class="rounded-md bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Save</button>
        </div>
    </form>
</div>