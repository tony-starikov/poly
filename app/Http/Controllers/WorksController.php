<?php

namespace App\Http\Controllers;

use App\Page_works;
use App\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $page_info = Page_works::where('id', '1')->first();
        $works = Work::get();
        return view('works', compact('works', 'page_info'));
    }

    public function single($code)
    {
        $work = Work::where('code', $code)->first();
        return view('work', compact('work'));
    }
}
