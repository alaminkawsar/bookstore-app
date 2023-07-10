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
         <th scope="col" class="text-end">Action</th>
       </tr>
     </thead>
     <tbody class='text-center'>
        @foreach($books as $book)
       <tr>
         <th scope="row">{{$book->id}}</th>
         <td>{{$book->title}}</td>
         <td>{{$book->author}}</td>
         <td>{{$book->isbn}}</td>
         <td>{{$book->price}}</td>
         <td>{{$book->available}}</td>
         <td class="text-end">
            <div class="">
                <a href="{{route('books.show',$book->id)}}" class="btn btn-secondary">View</a>
                <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                <form action = "{{route('books.destroy',$book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Danger</button>
                </form>
            </div>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
</div>

<div class="mx-auto col-3">
        {{ $books->links() }}
</div>



@endsection