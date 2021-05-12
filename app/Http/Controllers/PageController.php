<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Page;
use App\Position;
use App\Work;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        return view('main', compact('page_info'));
    }

    public function works()
    {
        $page_info = Page::where('name', 'works')->first();
        $works = Work::get();
        return view('works', compact('works', 'page_info'));
    }

    public function work($code)
    {
        $work = Work::where('code', $code)->first();
        return view('work', compact('work'));
    }

    public function artists()
    {
        $page_info = Page::where('name', 'artists')->first();
        $artists = Artist::get();
        return view('artists', compact('artists', 'page_info'));
    }

    public function artist($code)
    {
        $artist = Artist::where('code', $code)->first();
        return view('artist', compact('artist'));
    }

    public function about()
    {
        $page_info = Page::where('name', 'about')->first();

        return view('about', compact('page_info'));
    }

    public function recruit()
    {
        $page_info = Page::where('name', 'recruit')->first();

        $positions = Position::all();

        return view('recruit', compact('page_info', 'positions'));
    }

    public function contact()
    {
        $page_info = Page::where('name', 'contact')->first();

        return view('contact', compact('page_info'));
    }
}
