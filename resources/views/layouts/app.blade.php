<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Snoepwinkel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

</head>

<body class="font-sans antialiased bg-slate-800 text-white flex justify-center items-center w-full h-screen">
    @if (!request()->routeIs(['', 'welcome']))
    <a href="{{ route('welcome') }}" class="absolute left-8 top-4 bg-slate-600 hover:bg-slate-500 rounded-md font-black">Back</a>
    @endif


    <main class="flex flex-col space-y-2 min-w-2/5 max-w-3/5 h-max bg-slate-500">
        <h1 class=" p-4 w-full text-center">
            {{ $header }}
        </h1>
        {{ $slot }}
    </main>
</body>

</html>