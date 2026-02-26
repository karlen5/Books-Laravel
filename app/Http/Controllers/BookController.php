<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $book = Book::create([
        'title' => $request->input('title'),
        'author' => $request->input('author'),
        'date' => $request->input('date'),
        'comment' => $request->input('comment'),
        ]);

        return "created";

    }

    function index(){
        $books = Book::all();

        return view('books.index', ['books' => $books]);
    }
}
