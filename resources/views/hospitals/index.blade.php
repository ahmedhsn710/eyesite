<x-app-layout>
  <x-main-card>

    <div class="mx-6">
      <x-searchbar link="/hospitals" />
    </div>
    
    <x-page-heading>Eye Hospitals</x-page-heading><br />
    @if(count($hospitals) == 0)
      <p>No hospitals found</p>
    @else
    <div style="display: grid; grid-template-columns: 50% 50%;">
      @foreach($hospitals as $hospital)
        <x-small-card class="mx-6 my-3">

          <h3 class="text-xl font-semibold">{{$hospital->name}}</h3>

          <p>City: <u><a href="/hospitals?city={{$hospital->city}}">{{$hospital->city}}</a></u></p>

          @if($hospital->address ?? false)
            <p class="text-xs">Full address: {{$hospital->address}}</p>
          @endif

          @if($hospital->contact_no ?? false)
          <p class="text-xs">Contact no: {{$hospital->contact_no}}</p>
          @endif

          @if($hospital->email ?? false)
            <p class="text-xs">Email: {{$hospital->email}}</p>
          @endif

          @if($hospital->website ?? false)
            <br><p class="text-sm text-right">
              Website: <a class="text-blue-500" href="{{$hospital->website}}">{{$hospital->website}}</a>
            </p>
          @endif

        </x-small-card>
      @endforeach
    </div>       
    @endif 
  </x-main-card>
</x-app-layout>
