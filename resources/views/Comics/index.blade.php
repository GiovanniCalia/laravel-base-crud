@extends('template.base')

@section('title', 'Comics Home')

<main>
    <ol>
        @foreach ($comics as $comic)
         <li>{{ $comic->title }}</li>
         <a href=""></a>    
         @endforeach
     </ol>
     
     {{ $comics->links() }}
</main>