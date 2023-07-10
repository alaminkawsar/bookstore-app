<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ekhane sql query chalano hoy
        $books = Book::paginate(15);
        return view('index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $books = Book::create([
            'title'=> $request->input('title'),
            'author'=> $request->input('author'),
            'isbn'=> $request->input('isbn'),
            'price' => $request->input('price'),
            'available' => $request->input('available'),
        ]);

        return redirect()->route('books.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        print_r($book->title);
        return view('show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //dd($request);
        $book->update([
            'title'     => $request->input('title'),
            'author'    => $request->input('author'),
            'isbn'      => $request->input('isbn'),
            'price'     => $request->input('price'),
            'available' => $request->input('available'),
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success','Deleted Successfully');
    }
}
