<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Course;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('admin.pages.campaign.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.pages.campaign.create', compact('courses'));
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
        if (Campaign::create($input)) {
            return redirect()->route('campaign.index')->with('success', 'Campaign added successfully.');
        } else {
            return back()->with('error', 'error.');
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        $courses = Course::all();
        return view('admin.pages.campaign.edit', compact('campaign', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
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
            $setImage = $campaign->thumbnail;
            $image->move($filePath, $setImage);
            $input['thumbnail'] = $setImage;
        } else {
            unset($input['thumbnail']);
        }
        if ($campaign->update($input)) {
            return redirect()->route('campaign.index')->with('success', 'Campaign updated successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        if ($campaign->delete()) {
            return redirect()->route('campaign.index')->with('success', 'Campaign deleted successfully.');
        } else {
            return back()->with('error', 'error.');
        }
    }
}
