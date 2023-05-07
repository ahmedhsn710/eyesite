<x-app-layout>    
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
          <x-page-heading>{{$article->title}}</x-page-heading><br>
          <p>Author: {{$article->author}}</p>
          <p>Published on: {{$article->published_on}}</p>
          <br>
          <p>{{nl2br($article->body)}}</p>
          <a href={{$article->source}}><p class="text-blue-500 text-right">Click here for further reading</p></a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>