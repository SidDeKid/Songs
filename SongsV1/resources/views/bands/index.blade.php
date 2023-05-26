@extends('layouts.regular')
@section('content')
<div class="flex flex-col">
        @foreach ($bands as $band)
            <a href="{{ route('bands.show', ['band' => $band->id]) }}" class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
                {{ $band->name }}
            </a>
            <div class="flex flex-row mb-3">
                <form method='post' action="{{ route('bands.destroy', ['band' => $band->id]) }}">
                    @method('delete')
                    @csrf
                    <button type='submit' class='text-red-600 hover:text-red-800 ml-5 cursor-pointer'>Verwijderen</button>
                    <a href="{{ route('bands.edit', ['band' => $band->id]) }}" class='text-blue-500 hover:text-blue-700 ml-2 cursor-pointer'>Wijziggen</a>
                </form>
            </div>
        @endforeach
        <a href="{{ route('bands.create') }}" class="text-3xl pl-4 py-2 border-b-2 border-slate-300 bg-gradient-to-r from-blue-100 to-purple-100">
            Band toevoegen...
        </a>
    </div>
@endsection