<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $enroledCourses = Checkout::where('user_id', Auth::user()->id)->get();
        // dd(count($enroledCourses));
        return view('front.pages.dashboard.index', compact('enroledCourses'));
    }
}
