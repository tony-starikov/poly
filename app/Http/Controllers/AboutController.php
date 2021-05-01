<?php

namespace App\Http\Controllers;

use App\Page_about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = Page_about::where('id', '1')->first();

        return view('about', compact('abouts'));
    }
}
