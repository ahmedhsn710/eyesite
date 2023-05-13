<x-app-layout>
    <x-main-card>
      <h2 style="padding-top: 30px; padding-bottom:30px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:50px; text-align:center"><span class="colored-heading">R</span>eports</h2>
      @if(count($reports) == 0)
        <p class="m-4 p-3 border rounded">
          No reports to show<br>
          <button onclick="window.location.href='{{ route('eyetest') }}'" class="mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <div>Take tests</div>
          </button>
        </p>
      @else
        @foreach($reports as $report) 
        <x-main-card class="my-2 motion-safe:hover:scale-[1.01] transition-all duration-250" vert_space="2">
          <h3 class="text-xl font-semibold py-1" style="color: var(--main-color)">{{$report->user->name}}</h3>
          <p class="text-base transform -translate-x-1/2">
            {{$report->type}}: {{$report->left_eye_score}}, {{$report->left_eye_score}}
          </p>
          <p class="text-xs text-right">Date: {{$report->updated_at}}</p>
        </x-main-card>
        @endforeach
      @endif
    </x-main-card>
  </x-app-layout>
  
