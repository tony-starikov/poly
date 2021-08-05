<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;
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
    public function store(ArtistRequest $request)
    {
        $image_path = null;
        $image_sqr = null;

        if ($request->file('image')){
            $image_path = $request->file('image')->store('artists');
        }

        if ($request->file('image_sqr')){
            $image_sqr = $request->file('image_sqr')->store('artists');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $parameters['image_sqr'] = $image_sqr;
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
        $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);

        $image_path = $artist->image;
        $image_sqr = $artist->image_sqr;

        if ($request->file('image')) {
            Storage::delete($artist->image);
            $image_path = $request->file('image')->store('artists');
        }

        if ($request->file('image_sqr')) {
            Storage::delete($artist->image_sqr);
            $image_sqr = $request->file('image_sqr')->store('artists');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $parameters['image_sqr'] = $image_sqr;
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
