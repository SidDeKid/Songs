<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Album;

class AlbumSongController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::find($request['album_id']);
        $song = Song::find($request['song_id']);

        $album->songs()->attach($song);

        return redirect()->back();
    }
}
