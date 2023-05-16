<x-app-layout>
    <x-main-card :border="true" style="background-color: rgb(52, 51, 51) !important; color:white">
        <div class="flex justify-center">
            <h2 style="padding-top: 30px; padding-bottom:40px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">C</span>olor-<span class="colored-heading">B</span>lindness <span class="colored-heading">T</span>est</h2>
        </div>
        <div class="progress max-w-7xl mx-auto" style="margin-bottom:10px; width:30vw ">
            <div id="progress-bar" class="progress-bar progress-bar-striped" style="background: var(--main-color); width: 10%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="row">
            <div id="testimage" class="col-md-6 mx-auto" style="align-items: center;">
            </div>
            <div id="results" class="col-md-6 mx-auto" style="align-items: center; display: none;">
                <p id="resultsText" class="text-lg"></p>
                <form method="post" action="/reports" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="test_type" id="results_test_type" value="">
                    <input type="hidden" name="result" id="results_result" value="">
                    <input type="hidden" name="score" id="results_score" value="">
                    <button class="mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Save</button>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center" > 
                <div class="container pt-md-40">
                    <div class="row justify-content-around my-2">
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(1)">1</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(2)">2</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(3)">3</x-et-button>
                    </div>
                    <div class="row justify-content-around my-2">
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(4)">4</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(5)">5</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(6)">6</x-et-button>
                    </div>
                    <div class="row justify-content-around my-2">
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(7)">7</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(8)">8</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(9)">9</x-et-button>
                    </div>
                    <div class="row justify-content-around my-2">
                        <x-et-button style=" padding-left: 8% !important" onclick="giveAns(-1)">Skip</x-et-button>
                        <x-et-button style=" padding-left: 11% !important" onclick="giveAns(0)">0</x-et-button>
                        <x-et-button style=" padding-left: 8% !important" onclick="window.location.href='{{ route('eyetest') }}'">End</x-et-button>
                    </div>
                </div>
            </div> 
        </div>
    </x-main-card>
</x-app-layout> 