<x-app-layout>
    <x-main-card :border="true" style="background-color: rgb(52, 51, 51) !important; color:white">
        <div class="flex justify-center">
            <img src="{{ asset('images/logo.png') }}" alt="logo"  width="150" height="150">
        </div>
        <div class="progress max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-bottom:10px; width:50vw ">
            <div id="progress-bar" class="progress-bar progress-bar-striped" style="background: var(--main-color); width: 0%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="row">
            <div id="testimage" class="col-md-6 mx-auto" style="align-items: center">
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center" > 
                <div class="container">
                    <div class="row">
                        <x-primary-button class="col-4" onclick="giveAns(1)">1</x-primary-button>
                        <x-primary-button class="col-4" onclick="giveAns(2)">2</x-primary-button>
                        <x-primary-button class="col-4" onclick="giveAns(3)">3</x-primary-button>
                    </div>
                    <div class="row">
                        <x-primary-button class="col-4" onclick="giveAns(4)">4</x-primary-button>
                        <x-primary-button class="col-4" onclick="giveAns(5)">5</x-primary-button>
                        <x-primary-button class="col-4" onclick="giveAns(6)">6</x-primary-button>
                    </div>
                    <div class="row">
                        <x-primary-button class="col-4" onclick="giveAns(7)">7</x-primary-button>
                        <x-primary-button class="col-4" onclick="giveAns(8)">8</x-primary-button>
                        <x-primary-button class="col-4" onclick="giveAns(9)">9</x-primary-button>
                    </div>
                    </div>
            </div> 
        </div>
    </x-main-card>
</x-app-layout> 