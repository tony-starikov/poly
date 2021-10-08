<?php

namespace App\Http\Controllers\Admin;

use App\Field;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function main()
    {
        $fields = Page::where('name', 'main')->first()->fields;

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return view('admin.main', compact('fields'));
    }

    public function mainEdit(Request $request)
    {
        $fields = Page::where('name', 'main')->first()->fields;

        foreach ($fields as $field) {
            foreach ($request->all() as $n => $v) {

                $arr['value'] = $v;

                if ($n == $field->name){
                    $field->update($arr);
                }
            }
        }

        return redirect()->route('admin.main.page');
    }

    public function works()
    {
        $fields = Page::where('name', 'work')->first()->fields;

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return view('admin.works', compact('fields'));
    }

    public function worksEdit(Request $request)
    {
        $fields = Page::where('name', 'work')->first()->fields;

        foreach ($fields as $field) {
            foreach ($request->all() as $n => $v) {

                $arr['value'] = $v;

                if ($n == $field->name){
                    $field->update($arr);
                }
            }
        }

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
        $fields = Page::where('name', 'about')->first()->fields;

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return view('admin.about', compact('fields'));
    }

    public function aboutEdit(Request $request)
    {
        $fields = Page::where('name', 'about')->first()->fields;

        foreach ($fields as $field) {
            foreach ($request->all() as $n => $v) {

                $arr['value'] = $v;

                if ($n == $field->name){
                    $field->update($arr);
                }
            }
        }

        return redirect()->route('admin.about.page');
    }

    public function recruit()
    {
        $fields = Page::where('name', 'recruit')->first()->fields;

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return view('admin.recruit', compact('fields'));
    }

    public function recruitEdit(Request $request)
    {
        $fields = Page::where('name', 'recruit')->first()->fields;

        foreach ($fields as $field) {
            foreach ($request->all() as $n => $v) {

                $arr['value'] = $v;

                if ($n == $field->name){
                    $field->update($arr);
                }
            }
        }

        return redirect()->route('admin.recruit.page');
    }

    public function contact()
    {
        $fields = Page::where('name', 'contact')->first()->fields;

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return view('admin.contact', compact('fields'));
    }

    public function contactEdit(Request $request)
    {
        $fields = Page::where('name', 'contact')->first()->fields;

        foreach ($fields as $field) {
            foreach ($request->all() as $n => $v) {

                $arr['value'] = $v;

                if ($n == $field->name){
                    $field->update($arr);
                }
            }
        }

        return redirect()->route('admin.contact.page');
    }

    public function bgVideo()
    {
        $fields = Page::where('name', 'video')->first()->fields;

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return view('admin.video', compact('fields'));
    }

    public function bgVideoEdit(Request $request)
    {
        $video_path_mp4 = Field::where('name', 'video_mp4')->first();
        $video_path_webm = Field::where('name', 'video_webm')->first();
        $bg_image_path_jpg = Field::where('name', 'bg_image_jpg')->first();

        if ($request->file('video_mp4')){
            Storage::disk('public')->delete($video_path_mp4);
            $video_path_mp4 = $request->file('video_mp4')->store('video');
        }

        if ($request->file('video_webm')){
            Storage::disk('public')->delete($video_path_webm);
            $video_path_webm = $request->file('video_webm')->store('video');
        }

        if ($request->file('bg_image_jpg')){
            Storage::disk('public')->delete($bg_image_path_jpg);
            $bg_image_path_jpg = $request->file('bg_image_jpg')->store('video');
        }

        $parameters = [];

        $parameters['bg_image_jpg'] = $bg_image_path_jpg;
        $parameters['video_mp4'] = $video_path_mp4;
        $parameters['video_webm'] = $video_path_webm;

        $fields = Page::where('name', 'contact')->first()->fields;

        foreach ($fields as $field) {
            foreach ($parameters as $n => $v) {

                $arr['value'] = $v;

                if ($n == $field->name){
                    $field->update($arr);
                }
            }
        }

        return redirect()->route('admin.video.page');
    }
}
