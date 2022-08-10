<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel components</title>
        <!-- add this for assets -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main main-public>
            @yield('app-content')
        </main>
    </body>
</html>
