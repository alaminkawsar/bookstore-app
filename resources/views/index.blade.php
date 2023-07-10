@extends('layout')

@section('title') Books @endsection

@section('content')

<!-- {{print_r($books)}}
 -->
<div class='container'>
    <table class="table table-striped table-hover">
     <thead>
       <tr>
         <th scope="col">Title</th>
         <th scope="col">Author</th>
         <th scope="col">ISBN</th>
         <th scope="col">Price</th>
         <th scope="col">Available</th>
       </tr>
     </thead>
     <tbody class="text-center">
        @foreach($books as $book)
       <tr>
         <th scope="row">{{$book->id}}</th>
         <td>{{$book->title}}</td>
         <td>{{$book->author}}</td>
         <td>{{$book->isbn}}</td>
         <td>{{$book->price}}</td>
         <td>{{$book->available}}</td>
       </tr>
       @endforeach
     </tbody>
   </table>
</div>

{{ $books->links() }}


@endsection