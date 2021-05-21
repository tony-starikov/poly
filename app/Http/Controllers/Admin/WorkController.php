<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Software;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();

        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $software = Software::all();
        return view('admin.works.create', compact('software', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        $image_path_1 = null;
        $image_path_2 = null;
        $image_path_3 = null;
        $video_path_mp4 = null;
        $video_path_webm = null;

        if ($request->file('image_1')){
            $image_path_1 = $request->file('image_1')->store('works');
        }

        if ($request->file('image_2')){
            $image_path_2 = $request->file('image_2')->store('works');
        }

        if ($request->file('image_3')){
            $image_path_3 = $request->file('image_3')->store('works');
        }

        if ($request->file('video_mp4')){
            $video_path_mp4 = $request->file('video_mp4')->store('works');
        }

        if ($request->file('video_webm')){
            $video_path_webm = $request->file('video_webm')->store('works');
        }

        $parameters = $request->all();
        $parameters['image_1'] = $image_path_1;
        $parameters['image_2'] = $image_path_2;
        $parameters['image_3'] = $image_path_3;
        $parameters['video_mp4'] = $video_path_mp4;
        $parameters['video_webm'] = $video_path_webm;
        $work = Work::create($parameters);

        if (isset($request->soft)) {
            foreach ($request->soft as $id) {
                $work->software()->attach($id);
            }
        }

        if (isset($request->artists)) {
            foreach ($request->artists as $id) {
                $work->artists()->attach($id);
            }
        }

        $work->save();

        return redirect()->route('works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('admin.works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        $artists = Artist::all();
        $software = Software::all();
        return view('admin.works.edit', compact('work', 'artists', 'software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);
        foreach ($work->software as $soft) {
            $work->software()->detach($soft->id);
        }
        foreach ($work->artists as $artist) {
            $work->artists()->detach($artist->id);
        }

        if (isset($request->soft)) {
            foreach ($request->soft as $id) {
                $work->software()->attach($id);
            }
        }

        if (isset($request->artists)) {
            foreach ($request->artists as $id) {
                $work->artists()->attach($id);
            }
        }

        $image_path_1 = $work->image_1;
        $image_path_2 = $work->image_2;
        $image_path_3 = $work->image_3;
        $video_path_mp4 = $work->video_mp4;
        $video_path_webm = $work->video_webm;

        if ($request->file('image_1')){
            Storage::delete($work->image_1);
            $image_path_1 = $request->file('image_1')->store('works');
        }

        if ($request->file('image_2')){
            Storage::delete($work->image_2);
            $image_path_2 = $request->file('image_2')->store('works');
        }

        if ($request->file('image_3')){
            Storage::delete($work->image_3);
            $image_path_3 = $request->file('image_3')->store('works');
        }

        if ($request->file('video_mp4')){
            Storage::delete($work->video_mp4);
            $video_path_mp4 = $request->file('video_mp4')->store('works');
        }

        if ($request->file('video_webm')){
            Storage::delete($work->video_webm);
            $video_path_webm = $request->file('video_webm')->store('works');
        }

        $parameters = $request->all();
        $parameters['image_1'] = $image_path_1;
        $parameters['image_2'] = $image_path_2;
        $parameters['image_3'] = $image_path_3;
        $parameters['video_mp4'] = $video_path_mp4;
        $parameters['video_webm'] = $video_path_webm;
        $work->update($parameters);
        return redirect()->route('works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Work $work
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Work $work)
    {
        foreach ($work->software as $soft) {
            $work->software()->detach($soft->id);
        }

        foreach ($work->artists as $artist) {
            $work->artists()->detach($artist->id);
        }

        $work->delete();
        return redirect()->route('works.index');
    }
}
