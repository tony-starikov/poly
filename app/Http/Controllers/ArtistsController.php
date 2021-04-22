<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        return view('artists');
    }

    public function single($name)
    {
        return view('artist', ['artist' => $name]);
    }
}
