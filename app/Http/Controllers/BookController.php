<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;




class BookController extends Controller
{
    
    public function index()
    {
        
        $books = Book::with('author')->latest()->paginate(15);
        $books = \App\Models\Book::with('author')->latest()->paginate(15);

        return view('dashboard', [
            'books' => $books,
        ]);
    }

    
    public function show(Book $book) 
    {
        
        return view('books.show', [
            'book' => $book,
        ]);
    }
}
