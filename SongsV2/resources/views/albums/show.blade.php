@extends('layouts.regular')
@section('content')
    <p class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">{{ $album->name }}</p>
    @if (Auth::check())
        <div class="flex flex-row mb-3">
            <form method='post' action="{{ route('albums.destroy', ['album' => $album->id]) }}">
                @method('delete')
                @csrf
                <button type='submit' class='text-red-600 hover:text-red-800 ml-5 cursor-pointer'>Verwijderen</button>
                <a href="{{ route('albums.edit', ['album' => $album->id]) }}" class='text-blue-500 hover:text-blue-700 ml-2 cursor-pointer'>Wijziggen</a>
            </form>
        </div>
    @endif
    @if ($album->songs != null && $album->songs->count() != 0)
        <h1 class="text-3xl font-bold ml-5 mb-2">Songs ({{ $album->songs->count() }})</h1>
        <div class="flex flex-col">
            @foreach ($album->songs as $song)
                <a href="{{ route('songs.show', ['song' => $song->id]) }}" class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
                    {{ $song->title }}
                </a>
                @if (Auth::check())
                    <div class="flex flex-row mb-3">
                        <form method='post' action="{{ route('songs.destroy', ['song' => $song->id]) }}">
                            @method('delete')
                            @csrf
                            <button type='submit' class='text-red-600 hover:text-red-800 ml-5 cursor-pointer'>Verwijderen</button>
                            <a href="{{ route('songs.edit', ['song' => $song->id]) }}" class='text-blue-500 hover:text-blue-700 ml-2 cursor-pointer'>Wijziggen</a>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endsection