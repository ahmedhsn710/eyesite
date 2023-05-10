<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div {{$attributes->merge(['class' => 'bg-white overflow-hidden shadow sm:rounded-lg'])}}>      
      <div class="max-w-7xl mx-auto p-6 lg:p-8">
        {{$slot}}
      </div>
    </div>
  </div>
</div>