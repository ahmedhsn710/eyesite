<x-app-layout>
  <x-main-card :border="true">

    <canvas id="canvas" class="max-w-7xl mx-auto p-6 lg:p-8"></canvas>
    <div id="result" class="max-w-7xl mx-auto p-6 lg:p-8"></div>
      <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <x-primary-button id="testButton" onclick="start()" >Start test</x-primary-button>
        <x-primary-button id="stopButton" >Stop Video</x-primary-button>
      </div>                
    </div>
    
  </x-main-card>
</x-app-layout>