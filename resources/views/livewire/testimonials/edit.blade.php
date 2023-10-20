<form class="bg-white rounded-xl shadow-md p-6" wire:submit="submit">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testimonial') }}
        </h2>

        <nav class="flex mt-4" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4">
                <li>
                    <div>
                        <a href="{{route('home')}}" wire:navigate class="text-gray-400 hover:text-gray-500">
                            <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Home</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                        </svg>
                        <a href="{{route('dashboard')}}" wire:navigate class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Dashboard</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-sm font-medium text-gray-500" aria-current="page">Testimonial</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="space-y-12">
        <div>
            <h2 class="text-base font-semibold leading-7 text-gray-900">Set the details about this testimonial</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Update the status and image used for this testimonial.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                    <select wire:model="status" id="status" name="status" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6">
                        <option value="pending">Pending</option>
                        <option value="accepted">Accept</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <div>
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Avatar</label>
                    <p class="text-sm text-gray-500">Select which image should be showen for this testimonial</p>
                    <fieldset class="mt-4">
                        <legend class="sr-only">Image to use</legend>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input wire:model="avatar" value="{{$initialsUrl}}" id="initials" type="radio" checked class="h-4 w-4 border-gray-300 text-primary focus:ring-primary">
                                <label for="initials" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Initials</label>
                            </div>
                            <div class="flex items-center">
                                <input wire:model="avatar" value="{{$gravitarUrl}}" id="gravitar" type="radio" class="h-4 w-4 border-gray-300 text-primary focus:ring-primary">
                                <label for="gravitar" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Gravitar</label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="mt-4">
                        <img
                            x-bind:src="$wire.avatar"
                            alt="User profile picture"
                            class="rounded-full w-12"
                        >
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert bg-red-100 mt-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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
                            <input disabled wire:model="fullName" autocomplete="name" type="text" name="full_name" id="full_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60">
                        </div>
                    </div>
                </div>
    
                <div class="sm:col-span-6 flex flex-col md:flex-row sm:gap-8 lg:gap-16 w-full">
                    <div class="w-full">
                        <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary">
                                <input disabled wire:model="company" autocomplete="name" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60">
                            </div>
                        </div>
                    </div>
        
                    <div class="w-full">
                        <label for="position" class="block text-sm font-medium leading-6 text-gray-900">Job Position</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary">
                                <input disabled wire:model="jobPosition" autocomplete="organization-title" type="text" name="position" id="position" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:opacity-60">
                            </div>
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