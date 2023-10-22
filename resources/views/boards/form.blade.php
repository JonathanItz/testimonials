<x-board-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    @if ($logoUrl)
        <div class="flex justify-center pt-8">
            @if ($websiteUrl)
                <a href="{{$websiteUrl}}">
                    <img src="{{$logoUrl}}" alt="Company Logo" class="h-32 w-32 object-cover rounded-md">
                </a>
            @else
                <img src="{{$logoUrl}}" alt="Company Logo" class="h-32 w-32 object-cover rounded-md">
            @endif
        </div>
    @endif

    <div class="py-20">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <livewire:boards.form boardId="{{$boardId}}" />
        </div>
    </div>
</x-board-layout>
