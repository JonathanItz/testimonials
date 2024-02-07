<x-board-layout>
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

    <div
    x-data="{
        step: 1,

        goToStep(step) {
            this.$refs.stepContainer.style.opacity = 0

            setTimeout(() => {
                this.$refs.stepContainer.style.opacity = 1
                this.step = step
            }, 300)
        },

        init() {
            window.goToStep = this.goToStep
        }
    }"
    x-ref="stepContainer"
    class="transition-opacity"
    >
        <div class="py-20" x-show="step === 1">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-4 sm:rounded-xl shadow-lg border border-gray-200 text-center">
                    <h1 class="text-xl font-semibold tracking-wide">Did you love {{$name}}?</h1>
                    <h3 class="text-slate-600">
                        Leave a testimonial to help us grow
                    </h3>

                    <button x-on:click="goToStep(2)" class="bg-gradient-to-br from-primary to-secondary transition-colors w-full py-2 px-4 rounded-lg mt-12 text-white font-semibold">
                        Leave a testimonial ❤️
                    </button>
                </div>
            </div>
        </div>

        <div class="py-20" x-show="step === 2" style="display: none;">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <livewire:boards.form boardId="{{$boardId}}" websiteUrl="{{$websiteUrl}}" limit="{{$limit}}" :name="$name" />
            </div>
        </div>

        <div class="py-20" x-show="step === 2" style="display: none;">
            <div class="max-w-xl mx-auto" x-show="step === 3" style="display:none;">
                <div class="bg-white shadow-lg border border-gray-200 sm:rounded-xl p-4 transition-opacity">
                    <div class="text-center">
                        <h2 class="text-xl font-semibold tracking-wide">Thank you for submitting your testimonial 🎉</h2>
                        <div class="mt-4">
                            {{-- <p class="text-gray-600 font-medium">Your testimonial is under review and could take a few days to be accepted.</p> --}}
                            @if ($websiteUrl)
                                <a href="{{$websiteUrl}}" class="rounded-full bg-primary hover:bg-primary/80 transition-colors px-5 py-2 mt-8 inline-block font-semibold text-white">Back to Website</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-board-layout>
