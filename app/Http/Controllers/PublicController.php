<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Index()
    {
        $courses = Course::all();
        $campaigns = Campaign::all();
        return view('front.index', compact('courses', 'campaigns'));
    }
    public function admin()
    {
        return view('admin.index');
    }
    public function error()
    {
        return view('error-access');
    }
    public function categoryCourse($id)
    {
        $category = Category::find($id);
        // dd($category);
        $catcourses = Course::where('category_id', $category->id)->get();
        // dd($courses);
        return view('front.pages.courses', compact('catcourses', 'category'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function courseDetails(Course $course)
    {
        // $iscampaign = Campaign::where('course_id', $course->id);
        return view('front.pages.course-details', compact('course'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function campaignDetails(Campaign $campaign)
    {
        $course = Course::where('course_id', $campaign->course_id)->first();
        // dd($course);
        return view('front.pages.campaign-details', compact('campaign', 'course'));
    }
}
