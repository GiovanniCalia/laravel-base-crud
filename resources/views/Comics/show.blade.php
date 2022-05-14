@extends('template.base')

@section('title', 'Comic')

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
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-3" onClick="return confirm('Are you sure to delete this comic?')">Delete</button>
            </form>
        </div>
    </main>
@endsection