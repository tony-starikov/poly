<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Page_artists;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        $page_info = Page_artists::where('id', '1')->first();
        $artists = Artist::get();
        return view('artists', compact('artists', 'page_info'));
    }

    public function single($code)
    {
        $artist = Artist::where('code', $code)->first();
        return view('artist', compact('artist'));
    }
}
