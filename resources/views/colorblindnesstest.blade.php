<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="logo"  width="150" height="150">
                    </div>
                    <div class="row">
                        <div id="testimage" class="col-md-6 mx-auto" style="align-items: center">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center" > 
                            <div class="container">
                                <div class="row">
                                    <x-primary-button class="col-4">1</x-primary-button>
                                    <x-primary-button class="col-4">2</x-primary-button>
                                    <x-primary-button class="col-4">3</x-primary-button>
                                </div>
                                <div class="row">
                                    <x-primary-button class="col-4">4</x-primary-button>
                                    <x-primary-button class="col-4">5</x-primary-button>
                                    <x-primary-button class="col-4">6</x-primary-button>
                                </div>
                                <div class="row">
                                    <x-primary-button class="col-4">7</x-primary-button>
                                    <x-primary-button class="col-4">8</x-primary-button>
                                    <x-primary-button class="col-4">9</x-primary-button>
                                </div>
                              </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>   
    </div>
</x-app-layout> 