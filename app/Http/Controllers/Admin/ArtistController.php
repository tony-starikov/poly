<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();

        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_path = null;

        if ($request->file('image')){
            $image_path = $request->file('image')->store('artists');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        Artist::create($parameters);
        return redirect()->route('artists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $image_path = $artist->image;

        if ($request->file('image')) {
            Storage::delete($artist->image);
            $image_path = $request->file('image')->store('artists');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $artist->update($parameters);
        return redirect()->route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        foreach ($artist->works as $work) {
            $artist->works()->detach($work->id);
        }

        $artist->delete();

        return redirect()->route('artists.index');
    }
}
