<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
    $query = BookStore::query();

    if ($request->filled('search')) {
        $query->where('JudulBuku', 'like', '%' . $request->search . '%');
    }

    $books = $query->get();

    return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'JudulBuku' => 'required|string',
            'Harga' => 'required|string',
            'Stok' => 'required|string'
        ]); 

        BookStore::create($request->all());
        return redirect()->route('books.index');
    }

    public function show(BookStore $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(BookStore $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, BookStore $book)
    {
        $request->validate([
            'JudulBuku' => 'required|string',
            'Harga' => 'required|string',
            'Stok' => 'required|string'
        ]);

        $book->update($request->all());
        return redirect()->route('books.index');
    }

    public function destroy(BookStore $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
