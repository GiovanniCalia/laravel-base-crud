@extends('template.base')

@section('title', 'Comics Home')

@section('main')
<form method="POST" action="{{ route('comics.store') }}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="text">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <input type="text" name="description" class="form-control" id="description">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" name="thumb" class="form-control" id="thumb">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" id="price">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" name="series" class="form-control" id="series">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale_date</label>
        <input type="date" name="sale_date" class="form-control" id="sale_date">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" name="type" class="form-control" id="type">
      </div>
    <!--<div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>-->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection


