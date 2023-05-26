<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album_Song;

class AlbumSongController extends Controller
{
    public function store(Request $request)
    {
        Album_Song::create($request->validate([
            'album_id' => 'required|integer',
            'song_id' => 'required|integer',
        ]));
        if (isSet($_GET['song'])) {
            return redirect()->route("songs.edit", ["song" => $_GET["song"]]);
        }
        return redirect()->route("albums.edit", ["album" => $_GET["album"]]);
    }
}
