<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- @doc https://www.wubian.top/docs/5.5/csrf#csrf-x-csrf-token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        <style>

        </style>
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>
    </body>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
