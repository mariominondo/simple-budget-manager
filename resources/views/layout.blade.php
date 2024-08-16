<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Budget Manager</title>

    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    @include('components.navbar')


    <h1 class="sticky top-20 p-6 text-3xl bg-blue-50">@yield('title')</h1>

    @yield('content')


</body>
</html>
