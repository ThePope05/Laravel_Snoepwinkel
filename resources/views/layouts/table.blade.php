<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Snoepwinkel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="font-sans antialiased bg-slate-800 text-white flex justify-center items-center w-full h-screen">
    <a href="{{ route('welcome') }}" class="absolute left-8 top-4 bg-slate-600 hover:bg-slate-500 rounded-md font-black">Back</a>
    @if (isset($header))
    <header class="p-4 w-2/5 text-center">
        {{ $header }}
    </header>
    @endif

    <main class="min-w-2/5 max-w-3/5 h-max">
        @if (isset($slot_above))
        {{ $slot_above }}
        @endif
        <table class="w-full">
            <thead>
                {{ $columnnames }}
            </thead>
            <tbody>
                {{ $data }}
            </tbody>
        </table>
        @if (isset($slot_below))
        {{ $slot_below }}
        @endif
    </main>
</body>

</html>