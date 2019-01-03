<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- @doc https://www.wubian.top/docs/5.5/csrf#csrf-x-csrf-token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <style>
            .box {
                display: -webkit-flex; /* Safari */
                display: flex;
                width: 100%;
                background: #1b4b72;
                margin-bottom: 10px;
            }
            #menu a{
                padding: 10px;
                border: 1px solid #0c5460;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div id="menu" class="box">
                <a href="#/">home</a>
                <a href="#/about">about</a>
            </div>
            <router-view></router-view>
        </div>
    </body>
<script src="/js/app.js"></script>
</html>
