<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = Work::get();
        return view('works', compact('works'));
    }

    public function single($code)
    {
        $work = Work::where('code', $code)->first();
        return view('work', compact('work'));
    }
}
