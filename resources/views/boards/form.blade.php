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
                    <x-company-logo logoUrl="{{$logoUrl}}" />
                </a>
            @else
                <x-company-logo logoUrl="{{$logoUrl}}" />
            @endif
        </div>
    @endif

    <div class="py-20">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <livewire:boards.form boardId="{{$boardId}}" websiteUrl="{{$websiteUrl}}" limit="{{$limit}}" />
        </div>
    </div>
</x-board-layout>
