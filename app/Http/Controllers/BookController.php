<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    public function index(Request $request)
    {
        $books = Book::all();

        return view('books', [
            'books' => $books
        ]);
    }

    public function create(Request $request)
    {
        $book = new Book();

        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->cover_image = $request->input('cover_image');

        $book->save();

        return redirect()->route('books');
    }
}
