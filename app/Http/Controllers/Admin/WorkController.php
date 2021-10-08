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
    public function store(Request $request)
    {
        $cover = null;

        if ($request->file('cover_img')){
            $cover = $request->file('cover_img')->store('works');
        }

        $parameters = $request->all();

        $parameters['name'] = 'name';
        $parameters['cover_img'] = $cover;

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

        $cover = $work->cover_img;

        if ($request->file('cover_img')){
            Storage::disk('public')->delete($work->cover_img);
            $cover = $request->file('cover_img')->store('works');
        }

        $parameters = $request->all();

        $parameters['name'] = 'name';
        $parameters['cover_img'] = $cover;

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

        Storage::disk('public')->delete($work->cover_img);

        $work->delete();
        return redirect()->route('works.index');
    }
}
