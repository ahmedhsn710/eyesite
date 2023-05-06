<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
          <x-page-heading>Articles</x-page-heading><br>
          @if(count($articles) == 0)
            <p>No articles found</p>
          @else
            @foreach($articles as $article) 
            <x-small-card class="my-2">
              <h4 class="text-xl font-semibold"><a href={{"/articles/".$article->id}}>{{$article->title}}</a></h4>
              <p class="text-base transform -translate-x-1/2">{{nl2br(substr($article->body, 0, 256)).'...'}}</p>
              <p class="text-xs text-right">By {{$article->author}} &emsp; Date: {{$article->published_on}}</p>
            </x-small-card>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
