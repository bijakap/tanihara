<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Example</title>
        <!-- Logo -->
        <link rel="icon" href="https://picsum.photos/200">

        <!-- Load Tailwind -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-red-200">
       <p>test auth page</p>
       <a href="/flush">
        Click to flush session
       </a>
    </body>
</html>
