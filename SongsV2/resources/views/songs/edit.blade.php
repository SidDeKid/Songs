@extends('layouts.regular')

@section('content')
    <form method='post' action="{{ route('songs.update', ['song' => $song->id]) }}" class='grid grid-cols-2 grid-rows-5 w-screen max-h-screen h-96 gap-y-2 gap-x-2 p-2'>
        @csrf
        @method('put')
        <span class='flex bg-gradient-to-r from-green-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-1 col-end-2 justify-center items-center'>Wijzig song</span>
        <span class='flex text-black text-3xl row-start-2 row-end-3 col-start-1 col-end-2 justify-end items-center font-bold'>Titel</span>
        <input type='text' value='{{ $song->title }}' name='title' class='text-black text-3xl row-start-2 row-end-3 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-3 row-end-4 col-start-1 col-end-2 justify-end items-center font-bold'>Auteur</span>
        <input type='text' value='{{ $song->singer }}' name='singer' class='text-black text-3xl row-start-3 row-end-4 col-start-2 col-end-3 text-center'>
        <button type='submit' class='bg-gradient-to-r from-red-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-2 col-end-3 cursor-pointer'>Pas aan</button>
    </form>
    <form method='post' action="{{ route('album_song.store') }}" class='grid grid-cols-2 grid-rows-2 w-screen max-h-screen h-32 gap-y-2 gap-x-2 p-2'>
        @csrf
        <button type='submit' class='bg-gradient-to-r from-red-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-2 col-end-3 cursor-pointer'>Voeg toe</button>
        <span class='flex text-black text-3xl row-start-2 row-end-3 col-start-1 col-end-2 justify-end items-center font-bold'>Album toevoegen</span>
        <select name='album_id' class='text-black text-3xl row-start-2 row-end-3 col-start-2 col-end-3 text-center'>
            @foreach ($albums as $album)
                @if (!$song->albums->contains($album))
                    <option value="{{ $album->id }}">{{ $album->name }}</option>
                @endif
            @endforeach
        </select>
        <input name="song_id" value="{{ $song->id }}" type="text" class="hidden">
    </form>
@endsection