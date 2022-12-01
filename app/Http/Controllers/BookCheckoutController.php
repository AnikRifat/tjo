<?php

namespace App\Http\Controllers;

use App\Models\BookCheckout;
use Illuminate\Http\Request;

class bookCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookCheckouts = BookCheckout::all();

        // $user = User::where('id', $bookCheckouts->user_id)->get();
        // $book = book::where('id', $bookCheckouts->book_id)->get();
        return view('admin.pages.bookCheckout.index', compact('bookCheckouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "book_id" => 'required',
            "user_id" => 'required',
        ]);
        $input = $request->all();
        if (bookCheckout::create($input)) {
            return view('front.pages.bookCheckout-success');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bookCheckout  $bookCheckout
     * @return \Illuminate\Http\Response
     */
    public function show(bookCheckout $bookCheckout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bookCheckout  $bookCheckout
     * @return \Illuminate\Http\Response
     */
    public function request(bookCheckout $bookCheckout)
    {
        return view('front.pages.chekout', compact('bookCheckout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bookCheckout  $bookCheckout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookCheckout $bookCheckout)
    {
    }
    /**
     * decline the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bookCheckout  $bookCheckout
     * @return \Illuminate\Http\Response
     */
    public function accept(Request $request, bookCheckout $bookCheckout)
    {

        if ($bookCheckout->update(['type' => 1])) {
            return redirect()->route('bookCheckout.index')->with('success', 'bookCheckout approved successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * decline the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bookCheckout  $bookCheckout
     * @return \Illuminate\Http\Response
     */
    public function decline(Request $request, bookCheckout $bookCheckout)
    {

        if ($bookCheckout->update(['type' => 2])) {
            return redirect()->route('bookCheckout.index')->with('success', 'bookCheckout declined successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bookCheckout  $bookCheckout
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookCheckout $bookCheckout)
    {
        //
    }
}
