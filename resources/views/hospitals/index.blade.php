<x-app-layout>
  <x-main-card>
    <x-page-heading>Eye Hospitals</x-page-heading><br>
    <div style="display: grid; grid-template-columns: auto auto;">
    @if(count($hospitals) == 0)
      <p>No hospitals found</p>
    @else
      @foreach($hospitals as $hospital)
        <x-small-card class="mx-6 my-3">

          <h3 class="text-xl font-semibold">{{$hospital->name}}</h3>

          <p>City: <a href="/hospitals?city={{$hospital->city}}">{{$hospital->city}}</a></p>

          @if($hospital->address)
            <p class="text-xs">Full address: {{$hospital->address}}</p>
          @endif

          @if($hospital->contact_no)
          <p class="text-xs">Contact no: {{$hospital->contact_no}}</p>
          @endif

          @if($hospital->email)
            <p class="text-xs">Email: {{$hospital->email}}</p>
          @endif

          @if($hospital->website)
            <br><p class="text-sm text-right">
              Website: <a class="text-blue-500" href="{{$hospital->website}}">{{$hospital->website}}</a>
            </p>
          @endif

        </x-small-card>
      @endforeach
    @endif
    </div>        
  </x-main-card>
</x-app-layout>
