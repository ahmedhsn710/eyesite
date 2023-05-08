<x-app-layout>
    <x-main-card>
        <div class="row justify-content-around">
            <x-page-heading class="my-4">Eye Tests</x-page-heading><br>
            <x-small-card class="col-md-3">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Eye-Sight Test</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                    </p>

                    <x-primary-button onclick="window.location.href='{{ route('eyesighttest') }}'">
                        {{__('Take test')}}
                    </x-primary-button>
                </div>
            </x-small-card>

            <x-small-card class="col-md-3">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Color Blindness Test</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                    </p>

                    <x-primary-button onclick="window.location.href='{{ route('colorblindnesstest') }}'">
                        {{__('Take test')}}
                    </x-primary-button>
                </div>
            </x-small-card>

            <x-small-card class="col-md-3">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-600">Reaction Speed Test</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                    </p>

                    <x-primary-button onclick="window.location.href='{{ route('reactionspeedtest') }}'">
                        {{__('Take test')}}
                    </x-primary-button>
                </div>
            </x-small-card>
        </div>
    </x-main-card>
</x-app-layout>
