@extends('template.base')

@section('title', 'Comic')

@section('main')
    <main class="main_box">
        <div class="text-center my-4 box">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <h3>From the series: {{ $comic->series }}</h3>
            <div>Price: <strong>{{ $comic->price }}</strong></div>
            <div>Sale date: {{ $comic->sale_date }}</div>
            <div>{{ $comic->type }}</div>
            <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
            {{--<a href="{{ route('comics.delete')}}">Delete</a>--}}
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ url()->previous()}}">Back</a>
        </div>
    </main>
@endsection