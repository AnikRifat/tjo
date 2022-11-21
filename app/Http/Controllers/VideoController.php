<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.pages.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.video.create');
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
            'link' => 'required',
            'thumbnail' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('thumbnail')) {
            $filePath = 'assets/images/thumbnail/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['thumbnail'] = $setImage;
        }
        if (Video::create($input)) {
            return redirect()->route('video.index')->with('success', 'video Added successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('admin.pages.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        // dd($request->all());
        $request->validate([
            'link' => 'required',

        ]);
        $input = $request->all();
        if ($image = $request->file('thumbnail')) {
            $filePath = 'assets/images/thumbnail/';
            $setImage = $video->thumbnail;
            $image->move($filePath, $setImage);
            $input['thumbnail'] = $setImage;
        } else {
            unset($input['thumbnail']);
        }
        // dd($input);
        if ($video->update($input)) {

            return redirect()->route('video.index')->with('success', 'video edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        if ($video->delete()) {
            return redirect()->route('video.index')->with('success', 'video deleted successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }
}
