<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Song;
use App\Models\Album;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $songsFromAPI = []; // Creates an empty array.

        if($request->query->has('title')) { // If the request has a title...
            $api_key = '5c513aabe04f724b0eb3afce8101a322'; // Saves the API key in a variable.
            $title = $request->query('title'); // Saves the title of the request in a variable.
            $response = Http::get( 'http://ws.audioscrobbler.com/2.0/?method=track.search&track=' . $title . '&api_key=' . $api_key . '&format=json' )->json(); // Collects all songs from the API with $title in the title.
            $songsFromAPI = $response["results"]["trackmatches"]["track"]; // Puts the required results in a variable.
        }

        return view('songs.create', ['songsFromAPI' => $songsFromAPI]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Song::create($request->validate([
            'title' => 'required|max:100',
            'singer' => 'nullable',
        ]));

        return redirect()->route('songs.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $song
     * @return \Illuminate\Http\Response
     */
    public function show($song)
    {
        $song = Song::find($song);
        return view('songs.show', [ 'song' => $song ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $song
     * @return \Illuminate\Http\Response
     */
    public function edit($song)
    {
        $song = Song::find($song);
        $albums = Album::all();

        return view('songs.edit', [ 'song' => $song, 'albums' => $albums ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $song)
    {
        Song::find($song)->update($request->validate([
            'title' => 'required|max:100',
            'singer' => 'nullable',
        ]));

        return redirect()->route('songs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy($song)
    {
        Song::destroy($song);

        return redirect()->route('songs.index');
    }
}
