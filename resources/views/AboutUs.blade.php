<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="logo"  width="150" height="150">
                    </div>
                        <div class="mt-16 flex justify-center">
                            <div class="grid grid-cols-1 md:grid-cols-1">
                                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                    <div class="text-center">
                                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Contact Details</h2>

                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            We are emerging computer science students that want to do something good in life!
                                        </p>
                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            Email: blahblah@gmail.com
                                        </p>
                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            Contact Number: +92 333 3333333
                                        </p>
                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            Address: NUST H-12, Islamabad
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>