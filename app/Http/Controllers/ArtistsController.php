<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = Artist::get();
        return view('artists', compact('artists'));
    }

    public function single($code)
    {
        $artist = Artist::where('code', $code)->first();
        return view('artist', compact('artist'));
    }
}
