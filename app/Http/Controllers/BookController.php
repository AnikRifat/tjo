<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        $books = Book::all();
        return view('admin.pages.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $filePath = 'assets/images/book/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        if (Book::create($input)) {
            return redirect()->route('book.index')->with('success', 'book Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('admin.pages.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $filePath = 'assets/images/book/';
            $setImage = $book->image;
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        if ($book->update($input)) {

            return redirect()->route('book.index')->with('success', 'book edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if ($book->delete()) {
            return redirect()->route('book.index')->with('success', 'book deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }
}
