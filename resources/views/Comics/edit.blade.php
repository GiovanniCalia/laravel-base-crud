@extends('template.base')

@section('title', 'Edit Comics')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="text-center">Create your comic</h1>
            <form method="POST" action="{{ route('comics.update', $comic->id) }}" class="mb-3">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label"><h4>Title</h4></label>
                  <input type="text" name="title" class="form-control" id="text" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label"><h4>Description</h4></label>
                  <textarea type="text" name="description" class="form-control" id="description">{{ old('description', $comic->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label"><h4>Thumb</h4></label>
                    <input type="text" name="thumb" class="form-control" id="thumb" value="{{ $comic->thumb }}">
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label"><h4>Price</h4></label>
                    <input type="text" name="price" class="form-control" id="price" value="{{ $comic->price }}">
                  </div>
                  <div class="mb-3">
                    <label for="series" class="form-label"><h4>Series</h4></label>
                    <input type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}">
                  </div>
                  <div class="mb-3">
                    <label for="sale_date" class="form-label"><h4>Sale_date</h4></label>
                    <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
                  </div>
                  <div class="mb-3">
                    <label for="type" class="form-label"><h4>Type</h4></label>
                    <input type="text" name="type" class="form-control" id="type" value="{{ $comic->type }}">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ url()->previous()}}">Back</a>
        </div>
    </div>
</div>
@endsection