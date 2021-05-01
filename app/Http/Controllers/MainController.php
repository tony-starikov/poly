<?php

namespace App\Http\Controllers;

use App\Page_main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $page_info = Page_main::where('id', '1')->first();

        return view('main', compact('page_info'));
    }
}
