<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SoftwareRequest;
use App\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $software = Software::all();

        return view('admin.software.index', compact('software'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.software.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SoftwareRequest $request)
    {
        $image_path = null;
        if ($request->file('image')) {
            $image_path = $request->file('image')->store('software');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        Software::create($parameters);
        return redirect()->route('software.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function show(Software $software)
    {
        return view('admin.software.show', compact('software'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function edit(Software $software)
    {
        return view('admin.software.edit', compact('software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Software $software)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $image_path = $software->image;

        if ($request->file('image')) {
            Storage::delete($software->image);
            $image_path = $request->file('image')->store('software');
        }

        $parameters = $request->all();
        $parameters['image'] = $image_path;
        $software->update($parameters);
        return redirect()->route('software.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function destroy(Software $software)
    {
        foreach ($software->works as $work) {
            $software->works()->detach($work->id);
        }

        $software->delete();

        return redirect()->route('software.index');
    }
}
