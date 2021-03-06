<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Field;
use App\File;
use App\Page;
use App\Position;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function mainApi()
    {
        $data = Page::where('name', 'main')->first()->toArray();
//        $data = Page::where('name', 'main')->fields->get()->toArray();

        $fields = Page::where('name', 'main')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['data'=>$data, 'fields'=>$fields]);
    }

    public function aboutApi()
    {
        $data = Page::where('name', 'about')->first()->toArray();

        $fields = Page::where('name', 'about')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['data'=>$data, 'fields'=>$fields]);
    }

    public function contactApi()
    {
        $data = Page::where('name', 'contact')->first()->toArray();

        $fields = Page::where('name', 'contact')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['data'=>$data, 'fields'=>$fields]);
    }

    public function worksApi()
    {
        $data = Page::where('name', 'works')->first()->toArray();
        $works = Work::get()->toArray();
        return response()->json(['data'=>$data, 'works'=>$works]);
    }

    public function artistsApi()
    {
        $data = Page::where('name', 'artists')->first()->toArray();
        $artists = Artist::get()->toArray();
        return response()->json(['data'=>$data, 'artists'=>$artists]);
    }

    public function recruitApi()
    {
        $data = Page::where('name', 'recruit')->first()->toArray();

        $fields = Page::where('name', 'recruit')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        $positions = Position::all()->toArray();

        return response()->json(['data'=>$data, 'positions'=>$positions, 'fields'=>$fields]);
    }

    public function workApi($code)
    {
        $work = Work::where('code', $code)->first()->toArray();
        $works = Page::where('name', 'works')->first()->toArray();
        $files = Work::where('code', $code)->first()->files->toArray();
        $artists = Work::where('code', $code)->first()->artists->toArray();
        $software = Work::where('code', $code)->first()->software->toArray();
        $fields = Page::where('name', 'work')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['work'=>$work, 'works'=>$works, 'artists'=>$artists, 'software'=>$software, 'files'=>$files, 'fields'=>$fields]);
    }

    public function artistApi($code)
    {
        $artist = Artist::where('code', $code)->first()->toArray();
        return response()->json(['artist'=>$artist]);
    }

    public function main()
    {

//        $fields = Page::where('name', 'about')->first()->fields->toArray();
//
//        $arr = [];
//
//        foreach ($fields as $v) {
//            $arr[$v['name']] = $v['value'];
//        }
//
//        dd($arr);




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
