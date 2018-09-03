<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Author;
use App\Book;
use App\Http\Resources\Book as BookResource;

class ApiBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Get books
      $books = Book::simplePaginate(5);

      // Reutrn collection of books as a resource
      return BookResource::collection($books);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // Get book
      $book = Book::findOrFail($id);

      // Return single book as a resource
      return new BookResource($book);
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
      $book = Book::findOrFail($id);
      $book->author_id = $request->input('author_id');
      $book->title = $request->input('title');
      $book->save();
      return new BookResource($book);
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
      if ($book->delete())
      {
        return new BookResource($book);
      }      
    }
}
