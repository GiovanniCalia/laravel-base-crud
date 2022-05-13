@extends('template.base')

@section('title', 'Comics Home')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="text-center">Add a comic</h1>
            <form method="POST" action="{{ route('comics.store') }}" class="mb-3">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label"><h4>Title</h4></label>
                  <input type="text" name="title" class="form-control" id="text" value="{{ old('title') }}">
                </div>
                @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="description" class="form-label"><h4>Description</h4></label>
                  <input type="text" name="description" class="form-control" id="description" value="{{ old('description') }}">
                </div>
                @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="thumb" class="form-label"><h4>Thumb</h4></label>
                  <input type="text" name="thumb" class="form-control" id="thumb" value="{{ old('thumb') }}">
                </div>
                @error('thumb')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="price" class="form-label"><h4>Price</h4></label>
                  <input type="text" name="price" class="form-control" id="price" value="{{ old('price') }}">
                </div>
                @error('price')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="series" class="form-label"><h4>Series</h4></label>
                  <input type="text" name="series" class="form-control" id="series" value="{{ old('series') }}">
                </div>
                @error('series')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="sale_date" class="form-label"><h4>Sale_date</h4></label>
                  <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ old('sale_date') }}">
                </div>
                @error('sale_date')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="type" class="form-label"><h4>Type</h4></label>
                  <input type="text" name="type" class="form-control" id="type" value="{{ old('type') }}">
                </div>
                @error('type')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="text-center links my-4">
              <a href="{{ url()->previous()}}">Back</a>
              <a href="{{ route('comics.index') }}">Return to comics list</a>
              <a href="{{ route('home') }}">Return to home</a>
            </div>
        </div>
    </div>
</div>
@endsection


