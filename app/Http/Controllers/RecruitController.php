<?php

namespace App\Http\Controllers;

use App\Page_recruit;
use Illuminate\Http\Request;

class RecruitController extends Controller
{
    public function index()
    {
        $recruits = Page_recruit::where('id', '1')->first();

        return view('recruit', compact('recruits'));
    }
}
