@props(['link'])

<form action="{{$link}}/">
  <div class="row align-items-center">
    <div class="col-4 px-1">
      <input class="form-control rounded" type="text" name="search" placeholder="Search..." />
    </div>
    <div class="col-2 px-1">
      <input class="btn btn-light border rounded-pill" type="submit" value="search" />
    </div>
  </div>
</form>