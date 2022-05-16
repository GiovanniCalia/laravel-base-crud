@extends('template.base')

@section('title', 'Comics List')

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Inter:wght@300;700&family=Montserrat:wght@700&family=Open+Sans&family=Raleway:wght@300&family=Roboto&family=Rubik+Mono+One&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>

@section('main')
<main class="background_comic">
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
@endsection
