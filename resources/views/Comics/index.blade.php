@extends('template.base')

@section('title', 'Comics Home')

<main>
    <ol class="d-flex flex-wrap justify-content-between cards_main">
        @foreach ($comics as $comic)
             <li class="text-center">
                 <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                 <h3><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h3>
                 <div>Price: <strong>{{ $comic->price }}€</strong></div>
                 <div>Sale date: <strong>{{ $comic->sale_date }}</strong></div>
                 <div>Type: <strong>{{ $comic->type }}</strong></div>
            </li>   
         @endforeach
     </ol>
     
    {{ $comics->links() }}

    <div class="text-center links mt-5">
        <a href="{{ route('comics.create') }}">Add a comic</a>
        <a href="{{ route('home') }}" id="red">Return to homepage</a>
    </div>
</main>
