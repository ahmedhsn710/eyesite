<x-app-layout>    
  <x-main-card>
    <x-page-heading style="color: var(--main-color)">{{$article->title}}</x-page-heading><br>
    <p>Author: {{$article->author}}</p>
    <p>Published on: {{$article->published_on}}</p>
    <x-primary-button onclick="speak({{$article->body . ' '}})">
      Read Article
    </x-primary-button>
    <br>
    <p>
      @php
      $mystr = $article->body;
      echo nl2br($mystr);
      @endphp
    </p>
    <a href={{$article->source}}><p class="text-blue-500 text-right">Click here for further reading</p></a>
  </x-main-card>
  <script src="../js/articles.js"></script>
</x-app-layout>