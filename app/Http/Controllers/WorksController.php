<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        return view('works');
    }

    public function single($name)
    {
        return view('work', compact('name'));
    }
}
