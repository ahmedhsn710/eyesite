<x-app-layout>
  <x-main-card class="overflow-visible">

    <div class="row align-items-center gx-6 gy-2">
      <div class="col-md-6">
        <x-searchbar link="/hospitals" textbox_placeholder="Search hospitals..." />
      </div>
      <div class="col-md-6">
        <div class="dropdown float-end">
          <button class="btn btn-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select city
          </button>
          <ul class="dropdown-menu">
            @php
              $filtered = null;
              $activecity = "none";
              if ($_GET['city'] ?? false) {
                $filtered = true;
              }
            @endphp
            @if($filtered)
              <li><a class="dropdown-item" href="/hospitals">none</a></li>
              @foreach($cities as $c)
                @if($_GET['city'] == $c->city)
                  <li><a class="dropdown-item active" href="/hospitals?city={{$c->city}}">{{$c->city}}</a></li>
                @else
                  <li><a class="dropdown-item" href="/hospitals?city={{$c->city}}">{{$c->city}}</a></li>
                @endif
              @endforeach
            @else
              <li><a class="dropdown-item active" href="/hospitals">none</a></li>
              @foreach($cities as $c)
                <li><a class="dropdown-item" href="/hospitals?city={{$c->city}}">{{$c->city}}</a></li>
              @endforeach
            @endif
          </ul>
        </div>
      </div>
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
    <div class="container">
      {{$hospitals->appends($_GET)->links()}}
    </div>
    @endif 
  </x-main-card>
</x-app-layout>
