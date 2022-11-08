<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMG - {{ $title ?? ''}}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }} "/>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script> --}}
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">
    {{-- @include('partials.navigation')  Trabaja Igual pero sin componentes blade --}}
    <x-layouts.navigation />

    @if(session('status'))
        <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
            {{ session('status') }}
        </div>
    @endif


    {{ $slot}}
</body>
</html>