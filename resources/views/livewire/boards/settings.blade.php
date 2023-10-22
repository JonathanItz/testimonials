<div class="p-6 rounded-xl shadow-md bg-white">
    <form wire:submit="submit">
        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
                <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Logo</label>
                <div class="mt-2 flex items-center gap-x-3">
                    <div class="shrink-0">
                        @if ($existingLogo && ! $logo)
                            <img class="h-32 w-32 object-cover rounded-md" src="{{$existingLogo}}" alt="Current company logo" />
                        @else
                            @if ($logo)
                                <img class="h-32 w-32 object-cover rounded-md" src="{{$logo->temporaryUrl()}}" alt="Current company logo" />
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
                        <input autofocus wire:model="company" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Company Name">
                    </div>
                    <span class="text-gray-700 text-xs font-medium">
                        Updating this will change the board URL as well.
                    </span>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                        <input wire:model="website" type="text" name="website" id="website" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="www.example.com">
                    </div>
                </div>
              </div>
    
            <div class="sm:col-span-4">
                <label for="limit" class="block text-sm font-medium leading-6 text-gray-900">Set Max Character Length of Testimonials</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <input wire:model="testimonialLimit" type="number" name="limit" id="limit" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="500" value="1000" maxlength="1000" minlength="0">
                    </div>
                    <span class="text-gray-700 text-xs font-medium">
                        This number can not exceed over 1000.
                    </span>
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