<x-app-layout>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none focus:outline focus:outline-2 focus:outline-red-500" style="min-height:75vh">
                    <div class="order-md-first">
                        <img src="{{ asset('images/eyeforsite.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-6 order-md-last mb-3 mb-md-0 md:py-10" style="margin-left: 20px !important">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h2 style="padding-top: 30px; padding-bottom:30px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:50px;">Eye Site</h2>
                                <p style="padding-top: 10px; padding-bottom:20px; font-family:'Fredoka', Courier, monospace;">Welcome to Eye Site, the online platform for testing your eye health! With our simple and easy-to-use system, you can test your eyesight from the comfort of your own home. Can't believe, take the test now!</p>
                                <a href="/eyetest" class="btn btn-primary">Take the test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
