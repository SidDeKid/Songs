<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = band::all();
        return view('bands.index', ['bands' => $bands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['active_till'] == null) {
            $request['active_till'] = 'Heden';
        }
        band::create($request->validate([
            'name' => 'required|max:225',
            'genre' => 'required|max:255',
            'founded' => 'required|max:4',
            'active_till' => 'max:225',
        ]));
        
        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $band
     * @return \Illuminate\Http\Response
     */
    public function show($band)
    {
        $band = band::find($band);
        return view('bands.show', [ 'band' => $band ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $band
     * @return \Illuminate\Http\Response
     */
    public function edit($band)
    {
        $band = band::find($band);
        return view('bands.edit', [ 'band' => $band ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $band)
    {
        if($request['active_till'] == null) {
            $request['active_till'] = 'Heden';
        }
        band::find($band)->update($request->validate([
            'name' => 'required|max:225',
            'genre' => 'required|max:255',
            'founded' => 'required|max:4',
            'active_till' => 'max:225',
        ]));
        
        return redirect()->route('bands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy($band)
    {
        band::destroy($band);

        return redirect()->route('bands.index');
    }
}
