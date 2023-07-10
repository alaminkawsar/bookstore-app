@extends('layout')

@section('title') Books @endsection

@section('content')

<!-- {{print_r($books)}}
 -->

<div class='container'>
    <div class="mt-3">
        <a href="{{'/books/create'}}" class="btn btn-primary" >Add Book</a>
    </div>
    <table class="table table-striped table-hover">
     <thead class="text-center">
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Title</th>
         <th scope="col">Author</th>
         <th scope="col">ISBN</th>
         <th scope="col">Price</th>
         <th scope="col">Available</th>
         <th scope="col">Action</th>
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
         <td>
            <div class="mx-auto">
                <a href="#" class="btn btn-secondary">View</a>
                <a href="#" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-danger">Danger</button>
</div>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
</div>

{{ $books->links() }}


@endsection