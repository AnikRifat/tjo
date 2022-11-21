<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.content.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'about' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        $input = $request->all();;
        if ($image = $request->file('image')) {
            $filePath = 'assets/images/content/';
            $setImage = $content->image;
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        if ($image = $request->file('logo')) {
            $filePath = 'assets/images/content/';
            $setImage = $content->logo;
            $image->move($filePath, $setImage);
            $input['logo'] = $setImage;
        } else {
            unset($input['logo']);
        }
        if ($image = $request->file('favicon')) {
            $filePath = 'assets/images/content/';
            $setImage = $content->favicon;
            $image->move($filePath, $setImage);
            $input['favicon'] = $setImage;
        } else {
            unset($input['favicon']);
        }
        if ($content->update($input)) {
            return redirect()->route('content.index')->with('success', 'content edited successfully.');
        } else {
            return back()->with('error', 'Error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
