<x-app-layout>
    @slot( 'title' )
        Membership
    @endslot

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold tracking-widest text-gray-900 sm:text-5xl lg:col-span-2 xl:col-auto">
                You're membership ran out
            </h1>

            <div class="mt-4">
                <p>Please purchase our premium plan at only <b>$5/mo</b> to continue using Lemon Bestie</p>
            </div>

            <div class="mt-8 md:mt-12">
                <x-primary-link text="Go to billing →" link="/billing" />
            </div>
        </div>
    </div>
</x-app-layout>
