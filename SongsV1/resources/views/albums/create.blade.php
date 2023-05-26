@extends('layouts.regular')
@section('content')
<form method='post' action='{{ route("albums.store") }}' class='grid grid-cols-2 grid-rows-6 w-screen max-h-screen h-96 gap-y-2 gap-x-2 p-2'>
        @csrf
        @method('post')
        <span class='flex bg-gradient-to-r from-green-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-1 col-end-2 justify-center items-center'>Nieuw album</span>
        <span class='flex text-black text-3xl row-start-2 row-end-3 col-start-1 col-end-2 justify-end items-center font-bold'>Naam</span>
        <input type='text' name='name' class='text-black text-3xl row-start-2 row-end-3 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-3 row-end-4 col-start-1 col-end-2 justify-end items-center font-bold'>Jaar</span>
        <input type='text' name='year' class='text-black text-3xl row-start-3 row-end-4 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-4 row-end-5 col-start-1 col-end-2 justify-end items-center font-bold'>Aantal verkocht</span>
        <input type='text' name='times_sold' class='text-black text-3xl row-start-4 row-end-5 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-5 row-end-5 col-start-1 col-end-2 justify-end items-center font-bold'>Band</span>
        <select name='band_id' class='text-black text-3xl row-start-5 row-end-6 col-start-2 col-end-3 text-center'>
            @foreach ($bands as $band)
                <option value="{{ $band->id }}">{{ $band->name }}</option>
            @endforeach
        </select>
        <button type='submit' class='bg-gradient-to-r from-red-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-2 col-end-3 cursor-pointer'>Voeg toe</button>
    </form>
@endsection