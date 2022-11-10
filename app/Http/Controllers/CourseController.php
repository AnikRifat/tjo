<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.pages.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.course.create');
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
            "title" => 'required',
            "prerview" => 'required',
            "intro" => 'required',
            "duration" => 'required',
            "classes" => 'required',
            "image" => 'required',
            "cover_image" => 'required',
        ]);
        $setId = '#tjo' . uniqid();
        $input = $request->all();
        $input['course_id'] = $setId;
        if ($image = $request->file('image')) {
            $filePath = 'assets/images/course/';
            $setImage = date('YmdHis') . "_course_image" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        }
        if ($image = $request->file('cover_image')) {
            $filePath = 'assets/images/course/';
            $setImage = date('YmdHis') . "_course_cover_image" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['cover_image'] = $setImage;
        }
        if (Course::create($input)) {
            return redirect()->route('course.index')->with('success', 'course added successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.pages.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            "title" => 'required',
            "prerview" => 'required',
            "intro" => 'required',
            "duration" => 'required',
            "classes" => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $filePath = 'assets/images/course/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }

        if ($course->update($input)) {
            return redirect()->route('course.index')->with('success', 'course edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if ($course->delete()) {
            return redirect()->route('course.index')->with('success', 'course Deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }
}
