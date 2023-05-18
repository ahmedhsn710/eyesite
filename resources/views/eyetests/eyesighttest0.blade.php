<x-app-layout>
  <x-main-card :border="true" style="position: relative">
    <h2 class="text-center" style="padding-top: 30px; padding-bottom:40px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">E</span>ye-<span class="colored-heading">S</span>ight <span class="colored-heading">T</span>est</h2>
    <p class="text-center" style=" padding-top: 10px; padding-bottom:20px; font-family:'Fredoka', Courier, monospace; font-size:20px;" id="instruction"></p>
    <div style="position: absolute; bottom: 0 ">
      <p class="text-center" style=" font-family:'Fredoka', Courier, monospace; font-size:40px; color: var(--main-color);" id="letter-listened"></p>

    </div>

    <canvas id="canvas" class="max-w-7xl mx-auto" style="border: 2px solid var(--main-color); border-radius:5px;"></canvas>
    <div id="result" class="max-w-7xl mx-auto p-6 lg:p-8"></div>
      <div class="max-w-7xl mx-auto p-6 lg:p-8" style="display: flex;
      justify-content: center;
      align-items: center;">
        <x-primary-button id="testButton" onclick="start()" >Start test</x-primary-button>
      </div>                
    </div>
    
  </x-main-card>
</x-app-layout>