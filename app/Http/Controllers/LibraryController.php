<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('main.library', compact(['books']));
    }
    public function create()
    {
        return view('admin.components.add_book');
    }
    public function books_list()
    {
        return view('admin.components.add_book');
    }
    public function store(Request $request)
    {
        $book = new Books;
        $book->author = $request->author;
        $book->level = $request->level;
        $book->subject = $request->subject;
        $book->file = $request->book_link;
        $book->years = $request->years;
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|string',
        //     'number' => 'required|int',
        //     'subject' => 'required|string',
        //     'message' => 'required|string',
        // ]);
        $book->save();
        return redirect()->back();
    }


}
