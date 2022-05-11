@extends('template.base')

@section('title', 'Comics Home')

<main>
    <ol class="d-flex flex-wrap justify-content-between cards_main">
        @foreach ($comics as $comic)
             <li class="text-center">
                 <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                 <h3><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h3>
                 <div>{{ $comic->price }}</div>
                 <div>{{ $comic->sale_date }}</div>
                 <div>{{ $comic->type }}</div>
            </li>   
         @endforeach
     </ol>
     
    {{ $comics->links() }}
</main>
