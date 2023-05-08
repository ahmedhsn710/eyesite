<x-app-layout>
    <x-main-card>
        <div class="flex justify-center">
            <img src="{{ asset('images/logo.png') }}" alt="logo"  width="200" height="200">
        </div>

        <div>
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
                <x-small-card>
                    <div>
                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Articles</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                        </p>
                    </div>
                </x-small-card>
                <div class="flex">
                        <x-small-card>
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Eye-Sight Test</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>
                        </x-small-card>

                        <x-small-card>
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Color Blindness Test</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>
                        </x-small-card>

                        <x-small-card>
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Reaction Speed Test</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>
                        </x-small-card>
                    </div>
                <x-small-card>
                    <div>
                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Find Hospitals</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                        </p>
                    </div>
                </x-small-card>

                <x-small-card>
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                        </p>
                    </div>
                </x-small-card>
            </div>
        </div>
    </x-main-card>
</x-app-layout>
