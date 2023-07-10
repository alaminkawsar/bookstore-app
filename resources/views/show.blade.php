@extends('layout')

@section('title') Show Book @endsection

@section('content')

<div class="card" style="width: 50rem;">
  <div class="card-body">
    <h1 class="card-title text-center">Book Information</h1>
    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Title</b>&emsp; &emsp; &emsp;: {{$book->title}}</Title></li>
            <li class="list-group-item"><b>Author</b>&emsp; &emsp;: {{$book->author}}</Title></li>
            <li class="list-group-item"><b>ISBN</b>&emsp; &emsp; &emsp;: {{$book->isbn}}</Title></li>
            <li class="list-group-item"><b>Price</b>&emsp; &emsp; &emsp;: {{$book->price}}</Title></li>
            <li class="list-group-item"><b>Available</b>&emsp; : {{$book->available}}</Title></li>
        </ul>
</div>
  </div>
</div>


@endsection