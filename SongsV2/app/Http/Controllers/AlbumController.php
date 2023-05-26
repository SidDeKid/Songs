<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Band;
use App\Models\Song;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = album::all();
        return view('albums.index', ['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = band::all();

        return view('albums.create', ['bands' => $bands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        album::create($request->validate([
            'name' => 'required|max:225',
            'year' => 'nullable|min:4|max:4',
            'times_sold' => 'nullable|integer',
            'band_id' => 'required|integer',
        ]));
        
        return redirect()->route('albums.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function show($album)
    {
        $album = album::find($album);
        return view('albums.show', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($album)
    {
        $album = album::find($album);
        $bands = band::all();
        $songs = Song::all();

        return view('albums.edit', ['album' => $album, 'bands' => $bands, 'songs' => $songs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $album)
    {
        album::find($album)->update($request->validate([
            'name' => 'required|max:225',
            'year' => 'nullable|min:4|max:4',
            'times_sold' => 'nullable|integer',
            'band_id' => 'required|integer',
        ]));
        
        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($album)
    {
        album::destroy($album);

        return redirect()->route('albums.index');
    }
}