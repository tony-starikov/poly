<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();
        return view('admin.main', compact('page_info'));
    }

    public function mainEdit(Request $request)
    {
        $page_info = Page::where('name', 'main')->first();

        $image_path = $page_info->image;
        $video_path = $page_info->video;


        if ($request->file('image')){
            Storage::delete($page_info->image);
            $image_path = $request->file('image')->store('pages/main');
        }

        if ($request->file('video')){
            Storage::delete($page_info->video);
            $video_path = $request->file('video')->store('pages/main');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $parameters['video'] = $video_path;
        $page_info->update($parameters);

        return redirect()->route('admin.main.page');
    }

    public function works()
    {
        $page_info = Page::where('name', 'works')->first();
        return view('admin.works', compact('page_info'));
    }

    public function worksEdit(Request $request)
    {
        $page_info = Page::where('name', 'works')->first();

        $page_info->update($request->all());

        return redirect()->route('admin.works.page');
    }

    public function artists()
    {
        $page_info = Page::where('name', 'artists')->first();
        return view('admin.artists', compact('page_info'));
    }

    public function artistsEdit(Request $request)
    {
        $page_info = Page::where('name', 'artists')->first();

        $page_info->update($request->all());

        return redirect()->route('admin.artists.page');
    }

    public function about()
    {
        $page_info = Page::where('name', 'about')->first();
        return view('admin.about', compact('page_info'));
    }

    public function aboutEdit(Request $request)
    {
        $page_info = Page::where('name', 'about')->first();

        $image_path = $page_info->image;

        if ($request->file('image')){
            Storage::delete($page_info->image);
            $image_path = $request->file('image')->store('pages/about');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $page_info->update($parameters);

        return redirect()->route('admin.about.page');
    }

    public function recruit()
    {
        $page_info = Page::where('name', 'recruit')->first();
        return view('admin.recruit', compact('page_info'));
    }

    public function recruitEdit(Request $request)
    {
        $page_info = Page::where('name', 'recruit')->first();

        $image_path = $page_info->image;

        if (!is_null($request->file('image'))) {
            Storage::delete($page_info->image);
            $image_path = $request->file('image')->store('pages/recruit');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $page_info->update($parameters);

        return redirect()->route('admin.recruit.page');
    }

    public function contact()
    {
        $page_info = Page::where('name', 'contact')->first();
        return view('admin.contact', compact('page_info'));
    }

    public function contactEdit(Request $request)
    {
        $page_info = Page::where('name', 'contact')->first();

        $page_info->update($request->all());

        return redirect()->route('admin.contact.page');
    }
}
