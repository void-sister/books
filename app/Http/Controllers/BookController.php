<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::simplePaginate(10);
      return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $authors = Author::all();
      return view('books.create')->with('authors', $authors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
          'author_id' => 'bail|required|integer',
          'title' => 'required|max:255'
      ]);

      $book = new Book;
      $book->author_id = $request->author_id;
      $book->title = $request->title;
      $book->save();

      return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $book = Book::findOrFail($id);
      return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $book = Book::findOrFail($id);
      $authors = Author::all();
      return view('books.edit')
        ->with('book', $book)
        ->with('authors', $authors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
          'author_id' => 'bail|required|integer',
          'title' => 'required|max:255'
      ]);

      $book = Book::findOrFail($id);
      $book->author_id = $request->input('author_id');
      $book->title = $request->input('title');
      $book->save();
      return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $book = Book::findOrFail($id);
      $book->delete();

      return redirect('books');
    }
}
