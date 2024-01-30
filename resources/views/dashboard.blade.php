<x-app-layout>
    @slot( 'title' )
        Dashboard
    @endslot

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <livewire:dashboard />
        </div>
    </div>
</x-app-layout>
