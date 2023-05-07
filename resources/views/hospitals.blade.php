<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
          <div class="container">
          <x-page-heading>Eye Hospitals</x-page-heading><br>
          <div style="display: grid; grid-template-columns: auto auto;">
            @foreach($hospitals as $hospital)
              <x-small-card class="mx-6 my-3">
                <h3 class="text-xl font-semibold">{{$hospital->name}}</h3>
                <p>City: {{$hospital->city}}</p>
                @if($hospital->address)
                  <p class="text-xs">Full address: {{$hospital->address}}</p>
                @endif
              </x-small-card>
            @endforeach
          </div>        
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
