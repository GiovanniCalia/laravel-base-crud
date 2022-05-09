@extends('template.base')

@section('title', 'Comic')

@section('main')
<main class="main_box">
<div class="text-center box">
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <h3>From the series: {{ $comic->series }}</h3>
    <div>Price: <strong>{{ $comic->price }}</strong></div>
    <div>Sale date: {{ $comic->sale_date }}</div>
    <div>{{ $comic->type }}</div>
</div>
</main>

@endsection