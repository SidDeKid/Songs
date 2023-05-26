@extends('layouts.regular')
@section('content')
<div class="flex flex-col">
        @foreach ($albums as $album)
            <a href="{{ route('albums.show', ['album' => $album->id]) }}" class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
                {{ $album->name }}
            </a>
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
        @endforeach
        @if (Auth::check())
            <a href="{{ route('albums.create') }}" class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
                Album toevoegen...
            </a>
        @endif
    </div>
@endsection