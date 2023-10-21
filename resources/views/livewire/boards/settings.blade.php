<div class="p-6 rounded-xl shadow-md bg-white">
    <form wire:submit="submit">
        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <input autofocus wire:model="company" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your Company Name">
                    </div>
                    <span class="text-gray-700 text-xs font-medium">
                        Updating this will change the company URL as well.
                    </span>
                </div>
            </div>
    
            <div class="sm:col-span-4">
                <label for="limit" class="block text-sm font-medium leading-6 text-gray-900">Set Max Character Length of Testimonials</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                        <input autofocus wire:model="testimonialLimit" type="number" name="limit" id="limit" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="500" value="1000" maxlength="1000" minlength="0">
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