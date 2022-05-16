@extends('template.base')

@section('title', 'Edit Comic')

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Inter:wght@300;700&family=Montserrat:wght@700&family=Open+Sans&family=Raleway:wght@300&family=Roboto&family=Rubik+Mono+One&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>

@section('main')
<main>
  <div class="container my-4">
    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="text-center">Edit a comic</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                 </div>
            @endif

            <form method="POST" action="{{ route('comics.update', $comic->id) }}" class="mb-3">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label"><h4>Title</h4></label>
                  <input type="text" name="title" class="form-control" id="text" value="{{ old('title', $comic->title) }}">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label"><h4>Description</h4></label>
                  <textarea type="text" name="description" class="form-control" id="description">{{ old('description', $comic->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label"><h4>Thumb</h4></label>
                    <input type="text" name="thumb" class="form-control" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label"><h4>Price</h4></label>
                    <input type="text" name="price" class="form-control" id="price" value="{{ old('price', $comic->price) }}">
                  </div>
                  <div class="mb-3">
                    <label for="series" class="form-label"><h4>Series</h4></label>
                    <input type="text" name="series" class="form-control" id="series" value="{{ old('series', $comic->series) }}">
                  </div>
                  <div class="mb-3">
                    <label for="sale_date" class="form-label"><h4>Sale_date</h4></label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                  </div>
                  <div class="mb-3">
                    <label for="type" class="form-label"><h4>Type</h4></label>
                    <input type="text" name="type" class="form-control" id="type" value="{{ old('type', $comic->type) }}">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="text-center links">
                <a href="{{ url()->previous()}}" id="gray">Back</a>
                <a href="{{ route('comics.index') }}">Return to comics list</a>
                <a href="{{ route('home') }}" id="red">Return to home</a>
            </div>
        </div>
    </div>
</div>
</main>
@endsection