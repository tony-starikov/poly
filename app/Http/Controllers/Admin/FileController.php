<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Http\Controllers\Controller;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function main($work_id)
    {
        $work = Work::where('id', $work_id)->first();
        $files = File::where('work_id', $work->id)->get();
        return view('admin.files.index', compact('work', 'files'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index(Request $request)
//    {
//        $work = Work::where('id', $work_id)->first();
//        $files = File::where('work_id', $work->id)->get();
//        return view('admin.file', compact('work', 'files'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = Work::where('id', $request->work_id)->first();
        $type = $request->type;

        $work_id = $work->id;

        if ($type == 'image') {

            $image_path = null;

            if ($request->file('image')){
                $image_path = $request->file('image')->store('works');
            }

            $parameters = $request->all();
            $parameters['src'] = $image_path;
            $parameters['type'] = 'image';
            $parameters['work_id'] = $work_id;

            File::create($parameters);
        } elseif ($type == 'gif') {

            $gif_path = null;

            if ($request->file('gif')){
                $gif_path = $request->file('gif')->store('works');
            }

            $parameters = $request->all();
            $parameters['src'] = $gif_path;
            $parameters['type'] = 'gif';
            $parameters['work_id'] = $work_id;

            File::create($parameters);
        } elseif ($type == 'marmoset') {

            $parameters = $request->all();
            $parameters['src'] = $request->marmoset;
            $parameters['type'] = 'marmoset';
            $parameters['work_id'] = $work_id;

            File::create($parameters);
        } elseif ($type == 'video') {
            $video_path_mp4 = null;
            $video_path_webm = null;

            if ($request->file('video_mp4')){
                $video_path_mp4 = $request->file('video_mp4')->store('works');
            }

            if ($request->file('video_webm')){
                $video_path_webm = $request->file('video_webm')->store('works');
            }

            $parameters = $request->all();
            $parameters['video_mp4'] = $video_path_mp4;
            $parameters['video_webm'] = $video_path_webm;
            $parameters['type'] = 'video';
            $parameters['work_id'] = $work_id;

            File::create($parameters);
        }

        return redirect()->route('files.main', $request->work_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('admin.files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $type = $file->type;
        $work_id = $file->work_id;

        if ($type == 'image') {

            $image_path = $file->src;

            if ($request->file('image')){
                Storage::disk('public')->delete($file->src);
                $image_path = $request->file('image')->store('works');
            }

            $parameters = $request->all();
            $parameters['src'] = $image_path;
            $parameters['type'] = 'image';
            $parameters['work_id'] = $work_id;

            $file->update($parameters);
        } elseif ($type == 'gif') {

            $gif_path = $file->src;

            if ($request->file('gif')){
                Storage::disk('public')->delete($file->src);
                $gif_path = $request->file('gif')->store('works');
            }

            $parameters = $request->all();
            $parameters['src'] = $gif_path;
            $parameters['type'] = 'gif';
            $parameters['work_id'] = $work_id;

            $file->update($parameters);
        } elseif ($type == 'marmoset') {

            $parameters = $request->all();
            $parameters['src'] = $request->marmoset;
            $parameters['type'] = 'marmoset';
            $parameters['work_id'] = $work_id;

            $file->update($parameters);
        } elseif ($type == 'video') {
            $video_path_mp4 = $file->video_mp4;
            $video_path_webm = $file->video_webm;

            if ($request->file('video_mp4')){
                Storage::disk('public')->delete($file->video_mp4);
                $video_path_mp4 = $request->file('video_mp4')->store('works');
            }

            if ($request->file('video_webm')){
                Storage::disk('public')->delete($file->video_webm);
                $video_path_webm = $request->file('video_webm')->store('works');
            }

            $parameters = $request->all();
            $parameters['video_mp4'] = $video_path_mp4;
            $parameters['video_webm'] = $video_path_webm;
            $parameters['type'] = 'video';
            $parameters['work_id'] = $work_id;

            $file->update($parameters);
        }

        return redirect()->route('files.main', $file->work_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, File $file)
    {
        if ($file->type == 'image') {
            Storage::disk('public')->delete($file->src);
        } elseif ($file->type == 'gif') {
            Storage::disk('public')->delete($file->src);
        } elseif ($file->type == 'video') {
            Storage::disk('public')->delete($file->video_mp4);
            Storage::disk('public')->delete($file->video_webm);
        }
        $file->delete();
        return redirect()->route('files.main', $request->work_id);
    }
}
