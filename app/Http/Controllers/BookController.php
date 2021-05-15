<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    public function index(Request $request) {
        $books = Book::all();

        return view('books', [
            'books' => $books
        ]);
    }
}
