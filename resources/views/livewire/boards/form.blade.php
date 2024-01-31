<div>
    <form id="step-1" wire:submit="submit" class="space-y-10 divide-y divide-gray-900/10 transition-opacity">
        <div class="gap-y-8">
            <div class="bg-white shadow-lg border border-gray-200 sm:rounded-xl">
                <div class="p-4">
                    <div class="px-4 sm:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">About You</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Share your thoughts about {{$name}}.</p>
                    </div>

                    <div class="grid max-w-3xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                        <div class="sm:col-span-4">
                            <label for="full_name" class="block text-sm font-medium leading-6 text-gray-900">Name<span class="text-red-400">*</span></label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                                    <input autofocus wire:model="fullName" autocomplete="name" type="text" name="full_name" id="full_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="John Doe" required>
                                </div>
                            </div>
                        </div>
    
                        <div class="sm:col-span-6 grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                                        <input wire:model="company" autocomplete="name" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Company">
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="position" class="block text-sm font-medium leading-6 text-gray-900">Job Position</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                                        <input wire:model="jobPosition" autocomplete="organization-title" type="text" name="position" id="position" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Marketing Manager">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-span-full">
                            <label for="testimonial" class="block text-sm font-medium leading-6 text-gray-900">Testimonial<span class="text-red-400">*</span></label>
                            <div class="mt-2">
                                <textarea placeholder="Say something nice 💭" wire:model="testimonial" id="testimonial" name="testimonial" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" required></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Share what you have to say about this product/service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
            <div class="bg-white shadow-lg border border-gray-200 sm:rounded-xl md:col-span-3">
                <div class="px-4 py-6 sm:p-8">
                    <div class="px-4 sm:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information is not displayed publicly.</p>
                    </div>

                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
    
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address<span class="text-red-400">*</span></label>
                            <div class="mt-2">
                                <input wire:model="email" placeholder="example@email.com" id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
            <div class="px-4 sm:px-0">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Terms of Service</h2>
            </div>
    
            <div class="bg-white shadow-lg border border-gray-200 sm:rounded-xl md:col-span-2">
                <div class="px-4 py-6 sm:p-8">
                    <div class="max-w-2xl space-y-10">
                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input wire:model="termsOfService" id="tos" name="tos" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="tos" class="font-medium text-gray-900">Terms of Service<span class="text-red-400">*</span></label>
                                <p class="text-gray-500">I have read and agree to the <a href="{{route('terms')}}" class="text-primary">terms of service</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    
        @if ($errors->any())
            <div class="bg-red-100 mt-6 rounded-xl border border-red-200 px-6 py-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="pt-10">
            <div class="bg-white flex items-center justify-end gap-x-6 p-4 sm:rounded-xl shadow-lg border border-gray-200">
                {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                <button
                type="submit"
                class="rounded-md bg-gradient-to-br from-primary to-secondary px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary flex items-center gap-2 tracking-wide">
                    <span>
                        Submit
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>