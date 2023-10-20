<div class="p-6 rounded-xl shadow-md bg-white">
    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
            <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary sm:max-w-md">
                    <input autofocus wire:model="company" type="text" name="company" id="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="John Doe">
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
                    <input autofocus wire:model="testimonialLimit" type="number" name="limit" id="limit" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="500" value="1000">
                </div>
                <span class="text-gray-700 text-xs font-medium">
                    This number can not exceed over 1000.
                </span>
            </div>
        </div>
    </div>
</div>