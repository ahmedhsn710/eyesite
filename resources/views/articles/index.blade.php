<x-app-layout>
  <x-main-card>
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
  </x-main-card>
</x-app-layout>
