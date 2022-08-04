<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-red-200">
       <p>test pake Tailwind</p>
       <p class="text-[52px] font-SourceSerifPro">Source Serif Pro</p>
       <p class="text-[52px] font-SourceSansPro">Source Sans Pro</p>
       <p class="text-[52px] font-Inter">Inter</p>

    </body>
</html>
