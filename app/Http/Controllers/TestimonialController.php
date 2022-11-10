<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.testimonial.create');
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
            'title' => 'required',
            'text' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $filePath = 'assets/images/testimonial/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        if (Testimonial::create($input)) {
            return redirect()->route('testimonial.index')->with('success', 'course Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.pages.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'text' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $filePath = 'assets/images/testimonial/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        if ($testimonial->update($input)) {
            return redirect()->route('testimonial.index')->with('success', 'course edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->delete()) {
            return redirect()->route('testimonial.index')->with('success', 'course deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }
}
