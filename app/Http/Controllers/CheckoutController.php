<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts = Checkout::all();

        // $user = User::where('id', $checkouts->user_id)->get();
        // $course = Course::where('id', $checkouts->course_id)->get();
        return view('admin.pages.checkout.index', compact('checkouts'));
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
        //  dd($request->all());
        $request->validate([
            "course_id" => 'required',
            "user_id" => 'required',
        ]);
        $input = $request->all();
        if (Checkout::create($input)) {
            return view('front.pages.checkout-success');
        } else {
            return back()->with('error', 'error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function request(Checkout $checkout)
    {
        return view('front.pages.chekout', compact('checkout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
    }
    /**
     * decline the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function accept(Request $request, Checkout $checkout)
    {

        if ($checkout->update(['type' => 1])) {
            return redirect()->route('checkout.index')->with('success', 'checkout approved successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * decline the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function decline(Request $request, Checkout $checkout)
    {

        if ($checkout->update(['type' => 2])) {
            return redirect()->route('checkout.index')->with('success', 'checkout declined successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
