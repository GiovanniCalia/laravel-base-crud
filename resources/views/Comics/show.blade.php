@extends('template.base')

@section('title', 'Comic')

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Inter:wght@300;700&family=Montserrat:wght@700&family=Open+Sans&family=Raleway:wght@300&family=Roboto&family=Rubik+Mono+One&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>

@section('main')
    <main class="main_box">
        <div class="text-center my-4 box">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <div>From the series: <strong>{{ $comic->series }}</strong></div>
            <div>Price: <strong>{{ $comic->price }}€</strong></div>
            <div>Sale date: <strong>{{ $comic->sale_date }}</strong></div>
            <div>Type: <strong>{{ $comic->type }}</strong></div>
            <div class="links">
                <a href="{{ url()->previous()}}" id="gray">Back</a>
                <a href="{{ route('comics.edit', $comic->id) }}" id="green">Edit</a>
                <a href="{{ route('comics.index') }}">Return to comics list</a>
            </div>
            <button class="btn btn-danger btn-delete mt-4" data-id="{{ $comic->id }}">Delete</button>
            {{--<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-3" {{--onClick="return confirm('Are you sure to delete this comic?')">Delete</button>
            </form>--}}

            <section id="confirmation-overlay" class="overlay d-none">
                <div class="popup">
                    <h1>Sei sicuro di voler eliminare?</h1>
                    <div class="d-flex justify-content-center">
                        <button id="btn-no" class="btn btn-primary me-3">NO</button>
                        <form method="POST" data-base="{{ route('comics.index') }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">SI</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection