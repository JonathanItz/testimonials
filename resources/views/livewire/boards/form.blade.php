<div>
    <form id="step-1" wire:submit="submit" class="space-y-10 divide-y divide-gray-900/10 transition-opacity">
        <div class="grid grid-cols-1 gap-x-8 gap-y-8">
            <div class="bg-white shadow-sm ring-1 ring-slate-200 sm:rounded-xl md:col-span-2">
                <div class="px-4 py-6 sm:p-8">
                    <div class="px-4 sm:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">About You</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>

                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                        <div class="sm:col-span-4">
                            <label for="full_name" class="block text-sm font-medium leading-6 text-gray-900">Name<span class="text-red-400">*</span></label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                                    <input autofocus wire:model="fullName" autocomplete="name" type="text" name="full_name" id="full_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="John Doe" required>
                                </div>
                            </div>
                        </div>
    
                        <div class="sm:col-span-4">
                            <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                                    <input wire:model="company" autocomplete="name" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Company">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sm:col-span-4">
                            <label for="position" class="block text-sm font-medium leading-6 text-gray-900">Job Position</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                                    <input wire:model="jobPosition" autocomplete="organization-title" type="text" name="position" id="position" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Marketing Manager">
                                </div>
                            </div>
                        </div>
    
                        <div class="col-span-full">
                            <label for="testimonial" class="block text-sm font-medium leading-6 text-gray-900">Testimonial<span class="text-red-400">*</span></label>
                            <div class="mt-2">
                                <textarea wire:model="testimonial" id="testimonial" name="testimonial" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" required></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Share what you have to say about this product/service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
            <div class="bg-white shadow-sm ring-1 ring-slate-200 sm:rounded-xl md:col-span-3">
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
    
            <div class="bg-white shadow-sm ring-1 ring-slate-200 sm:rounded-xl md:col-span-2">
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
            <div class="bg-white flex items-center justify-end gap-x-6 px-4 py-4 sm:px-8 sm:rounded-xl shadow-sm ring-1 ring-gray-900/5">
                {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                <button type="submit" class="rounded-md bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Save</button>
            </div>
        </div>
    </form>

    <div id="step-2" style="display:none;" class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl px-4 py-6 sm:p-8 transition-opacity">
        <div class="text-center">
            <h2 class="text-xl">Thank you for submitting your testimonial 🎉</h2>
            <div class="mt-4">
                <p class="text-gray-600 font-medium">Your testimonial is under review and could take a few days to be accepted.</p>
                @if ($websiteUrl)
                    <a href="{{$websiteUrl}}" class="rounded-full bg-primary hover:bg-primary/80 transition-colors px-4 py-1.5 mt-8 inline-block">Back to Website</a>
                @endif
            </div>
        </div>
    </div>
</div>