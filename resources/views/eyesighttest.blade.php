<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
              <canvas id="canvas" class="max-w-7xl mx-auto p-6 lg:p-8"></canvas>
              <div id="result" class="max-w-7xl mx-auto p-6 lg:p-8"></div>
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                  <x-primary-button id="testButton" onclick="start()" >Measure Distance</x-primary-button>
                  <x-primary-button id="stopButton" >Stop Video</x-primary-button>
                </div>
              </div>
        </div>
    </div>
</div>

</x-app-layout>