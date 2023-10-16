<x-board-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex justify-center pt-8">
        <a href="/" wire:navigate>
            <x-application-logo class="block h-16 w-auto rounded-md" />
        </a>
    </div>

    <div class="py-20">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <livewire:boards.form boardId="{{$boardId}}" />
        </div>
    </div>
</x-board-layout>
