<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased text-gray-800 dark:text-gray-200">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24 dark:bg-slate-900">
        <x-layout.navbar></x-layout.navbar>
        {{$slot}}
        <x-layout.footer></x-layout.footer>
        </div>
        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
</html>
