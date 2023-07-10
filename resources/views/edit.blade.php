
@extends('layout')

@section('title') Create Book @endsection

@section('content')

    <div class='container'>
    <form action="{{route('books.update',$book->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group mt-3">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{$book->title ? $book->title:old('title')}}">
    </div>
    <div class="form-group mt-3">
        <label for="author">Author</label>
        <input type="text" name="author" class="form-control" id="author" value="{{$book->author ? $book->author: old('author')}}">
    </div>
    <div class="form-group mt-3">
        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" class="form-control" id="isbn" value="{{$book->isbn ? $book->isbn:old('isbn')}}">
    </div>
    <div class="form-group mt-3">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control" id="price" value="{{$book->price ? $book->price:old('price')}}">
    </div>
    <div class="form-group mt-3">
        <label for="available">Available</label>
        <input type="text" name="available" class="form-control" id="available" value="{{$book->available ? $book->available : old('available')}}">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

</div>


@endsection