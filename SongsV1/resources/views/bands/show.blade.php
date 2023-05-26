@extends('layouts.regular')
@section('content')
    <p class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">{{ $band->name }}</p>
    <div class="flex flex-row mb-3">
        <form method='post' action="{{ route('bands.destroy', ['band' => $band->id]) }}">
            @method('delete')
            @csrf
            <button type='submit' class='text-red-600 hover:text-red-800 ml-5 cursor-pointer'>Verwijderen</button>
            <a href="{{ route('bands.edit', ['band' => $band->id]) }}" class='text-blue-500 hover:text-blue-700 ml-2 cursor-pointer'>Wijziggen</a>
        </form>
    </div> <br>
    @if ($band->albums != null && $band->albums->count() != 0)
        <h1 class="text-3xl font-bold ml-5 mb-2">Albums ({{ $band->albums->count() }})</h1>
        <div class="flex flex-col">
            @foreach ($band->albums as $album)
                <a href="{{ route('albums.show', ['album' => $album->id]) }}" class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
                    {{ $album->name }}
                </a>
                <div class="flex flex-row mb-3">
                    <form method='post' action="{{ route('albums.destroy', ['album' => $album->id]) }}">
                        @method('delete')
                        @csrf
                        <button type='submit' class='text-red-600 hover:text-red-800 ml-5 cursor-pointer'>Verwijderen</button>
                        <a href="{{ route('albums.edit', ['album' => $album->id]) }}" class='text-blue-500 hover:text-blue-700 ml-2 cursor-pointer'>Wijziggen</a>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
@endsection