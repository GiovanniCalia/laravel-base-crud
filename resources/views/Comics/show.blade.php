@extends('template.base')

@section('title', 'Comic')

@section('main')
<h1>{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>
@endsection