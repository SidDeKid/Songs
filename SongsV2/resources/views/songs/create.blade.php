@extends('layouts.regular')
@section('content')
    <!-- <form method='post' action='{{ route("songs.store") }}' class='grid grid-cols-2 grid-rows-3 w-screen max-h-screen h-64 gap-y-2 gap-x-2 p-2'>
        @csrf
        <span class='flex bg-gradient-to-r from-green-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-1 col-end-2 justify-center items-center'>Nieuwe song</span>
        <span class='flex text-black text-3xl row-start-2 row-end-3 col-start-1 col-end-2 justify-end items-center font-bold'>Titel</span>
        <input type='text' name='title' class='text-black text-3xl row-start-2 row-end-3 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-3 row-end-4 col-start-1 col-end-2 justify-end items-center font-bold'>Auteur</span>
        <input type='text' name='singer' class='text-black text-3xl row-start-3 row-end-4 col-start-2 col-end-3 text-center'>
        <button type='submit' class='bg-gradient-to-r from-red-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-2 col-end-3 cursor-pointer'>Voeg toe</button>
    </form> -->
    <form method='get' action='{{ route("songs.create") }}' class='grid grid-cols-2 grid-rows-2 w-screen h-48 gap-y-2 gap-x-2 p-2'>
        <span class='flex bg-gradient-to-r from-green-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-1 col-end-2 justify-center items-center'>Bestaande song</span>
        <span class='flex text-black text-3xl row-start-2 row-end-3 col-start-1 col-end-2 justify-end items-center font-bold'>Titel</span>
        <input type='text' name='title' class='text-black text-3xl row-start-2 row-end-3 col-start-2 col-end-3 text-center'>
        <button type='submit' class='bg-gradient-to-r from-red-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-2 col-end-3 cursor-pointer'>Zoek song</button>
    </form> <br>
    @if ($songsFromAPI != null)
        <h1 class="text-3xl font-bold ml-5 mb-2">Gevonden songs ({{ count($songsFromAPI) }})</h1>
        @foreach($songsFromAPI as $song)
            <div class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
                {{ $song['artist'] }}: {{ $song['name'] }}
            </div>
            <div class="flex flex-row mb-3">
                <form method='post' action="{{ route('songs.store') }}">
                    @csrf
                    <input type="hidden" name="title" value="{{ $song['name'] }}">
                    <input type="hidden" name="singer" value="{{ $song['artist'] }}">
                    <button type='submit' class='text-green-600 hover:text-green-800 ml-5 cursor-pointer'>Toevoegen +</button>
                </form>
            </div>
        @endforeach
    @endif
@endsection