<form class="bg-white rounded-xl shadow-md p-6" wire:submit="submit">
    <div class="space-y-12">
        <div>
            <h2 class="text-base font-semibold leading-7 text-gray-900">Set the details about this testimonial</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Update the status and image used for this testimonial.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                    <select wire:model="status" id="status" name="status" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6">
                        <option value="pending">Pending</option>
                        <option value="active">Active</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <div>
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Image to use</label>
                    <p class="text-sm text-gray-500">Select which image should be showen for this testimonial</p>
                    <fieldset class="mt-4">
                        <legend class="sr-only">Image to use</legend>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input id="initials" name="notification-method" type="radio" checked class="h-4 w-4 border-gray-300 text-primary focus:ring-primary">
                                <label for="initials" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Initials</label>
                            </div>
                            <div class="flex items-center">
                                <input id="gravitar" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-primary focus:ring-primary">
                                <label for="gravitar" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Gravitar</label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="mt-4">
                        <img
                            x-bind:src="avatarUrl"
                            alt="User profile picture"
                            class="rounded-full w-12"
                        >
                    </div>
                </div>
  
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Save</button>
            </div>
        </div>

        <div class="border-t border-gray-900/10 pt-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">About this user</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
    
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="full_name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                            <input disabled wire:model="fullName" autocomplete="name" type="text" name="full_name" id="full_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60" placeholder="John Doe">
                        </div>
                    </div>
                </div>
    
                <div class="sm:col-span-4">
                    <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                            <input disabled wire:model="website" autocomplete="url" type="text" name="website" id="website" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60" placeholder="www.example.com">
                        </div>
                    </div>
                </div>
    
                <div class="sm:col-span-4">
                    <label for="position" class="block text-sm font-medium leading-6 text-gray-900">Job Position</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                            <input disabled wire:model="jobPosition" autocomplete="organization-title" type="text" name="position" id="position" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60" placeholder="Marketing Manager">
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="testimonial" class="block text-sm font-medium leading-6 text-gray-900">Testimonial</label>
                    <div class="mt-2">
                        <textarea disabled wire:model="testimonial" id="testimonial" name="testimonial" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60"></textarea>
                    </div>
                    {{-- <p class="mt-3 text-sm leading-6 text-gray-600">Share what you have to say about this product/service.</p> --}}
                </div>
            </div>
        </div>
    
        {{-- <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">This information is not displayed publicly.</p>
    
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input wire:model="email" placeholder="example@email.com" id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</form>