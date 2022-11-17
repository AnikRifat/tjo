<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lives = Live::all();
        return view('admin.pages.live.index', compact('lives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.pages.live.create', compact('courses'));
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
            "name" => 'required',
            "course_id" => 'required',
            "type" => 'required',
            "hasdiscount" => 'required',
            "start_date" => 'required',
            "end_date" => 'required',
        ]);

        $input = $request->all();

        $course = Course::where('course_id', $request->input('course_id'))->first();
        $discount = $request->input('discount');
        $discounted_price = $course->price - ($course->price * ($discount  / 100));
        $input['discounted_price'] = $discounted_price;
        $input['price'] = $course->price;

        if ($image = $request->file('thumbnail')) {
            $filePath = 'assets/images/course/';
            $setImage = date('YmdHis') . "_course_thumbnail" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['thumbnail'] = $setImage;
        }
        if (Live::create($input)) {
            return redirect()->route('live.index')->with('success', 'live added successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function show(Live $live)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function edit(Live $live)
    {
        $courses = Course::all();
        return view('admin.pages.live.edit', compact('live', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Live $live)
    {
        $request->validate([
            "course_id" => 'required',
            "start_date" => 'required',
            "end_date" => 'required',
        ]);
        $input = $request->all();

        $course = Course::where('course_id', $request->input('course_id'))->first();
        $discount = $request->input('discount');
        $discounted_price = $course->price - ($course->price * ($discount  / 100));
        $input['discounted_price'] = $discounted_price;
        $input['price'] = $course->price;


        if ($image = $request->file('banner')) {
            $filePath = 'assets/images/course/';
            $setImage = $live->banner;
            $image->move($filePath, $setImage);
            $input['banner'] = $setImage;
        } else {
            unset($input['banner']);
        }
        if ($live->update($input)) {
            return redirect()->route('live.index')->with('success', 'live updated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function destroy(Live $live)
    {
        if ($live->delete()) {
            return redirect()->route('live.index')->with('success', 'live deleted successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
