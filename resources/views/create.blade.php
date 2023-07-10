@extends('layout')

@section('title') Create Book @endsection

@section('content')


    <div class='container'>
    <form action="{{'/books/store'}}" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="text">
    </div>
    <div class="form-group mt-3">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="text">
    </div>
    <div class="form-group mt-3">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="text">
    </div>
    <div class="form-group mt-3">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="text">
    </div>
    <div class="form-group mt-3">
        <label for="available">Available</label>
        <input type="text" class="form-control" id="text">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>


</div>

@endsection
