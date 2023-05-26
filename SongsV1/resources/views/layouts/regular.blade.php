<!DOCTYPE html>
<html lang="nl">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liedjes</title>
    @vite('resources/css/app.css')
</head>

<body class='bg-blue-50'>
    <div class="bg-gradient-to-r from-blue-500 to-gray-800 text-white text-2xl">
        <ul class="flex p-4 flex-wrap">
            <li class="mr-6 text-5xl">
                Songs Enzo
            </li>
            <li class="mr-6 mt-5 hover:underline">
                <a href="{{ route('songs.index') }}">Songs</a>
            </li>
            <li class="mr-6 mt-5 hover:underline">
                <a href="{{ route('bands.index') }}">Bands</a>
            </li>
            <li class="mr-6 mt-5 hover:underline">
                <a href="{{ route('albums.index') }}">Albums</a>
            </li>
        </ul>
    </div>

    @yield('content')
</body>

</html>