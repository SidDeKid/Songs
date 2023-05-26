@extends('layouts.regular')

@section('content')
    <form method='post' action="{{ route('bands.update', ['band' => $band->id]) }}" class='grid grid-cols-2 grid-rows-5 w-screen max-h-screen h-96 gap-y-2 gap-x-2 p-2'>
        @csrf
        @method('put')
        <span class='flex bg-gradient-to-r from-green-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-1 col-end-2 justify-center items-center'>Wijzig band</span>
        <span class='flex text-black text-3xl row-start-2 row-end-3 col-start-1 col-end-2 justify-end items-center font-bold'>Naam</span>
        <input type='text' value='{{ $band->name }}' name='name' class='text-black text-3xl row-start-2 row-end-3 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-3 row-end-4 col-start-1 col-end-2 justify-end items-center font-bold'>Genre</span>
        <input type='text' value='{{ $band->genre }}' name='genre' class='text-black text-3xl row-start-3 row-end-4 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-4 row-end-5 col-start-1 col-end-2 justify-end items-center font-bold'>Opgericht</span>
        <input type='text' value='{{ $band->founded }}' name='founded' class='text-black text-3xl row-start-4 row-end-5 col-start-2 col-end-3 text-center'>
        <span class='flex text-black text-3xl row-start-5 row-end-6 col-start-1 col-end-2 justify-end items-center font-bold'>Actief tot</span>
        <input type='text' value='{{ $band->active_till }}' name='active_till' class='text-black text-3xl row-start-5 row-end-6 col-start-2 col-end-3 text-center'>
        <button type='submit' class='bg-gradient-to-r from-red-500 to-gray-800 text-white text-3xl row-start-1 row-end-2 col-start-2 col-end-3 cursor-pointer'>Pas aan</button>
    </form>
@endsection