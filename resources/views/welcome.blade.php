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
            .flex {
                display: -webkit-flex; /* Safari */
                display: flex;
            }
            .align-center {
                align-items: center;
            }
            .justify-center {
                justify-content: center;
            }
            .box {
                width: 100%;
                background: #1b4b72;
                margin-bottom: 10px;
            }
            .font-blue {
                color: rgba(54, 144, 220, 0.5);
            }
            .font-blue a:hover {
                color: #6cb2eb;
            }
            .box a{
                padding: 10px;
                border: 1px solid #0c5460;
                text-decoration: none;
            }
            .content {
                width: 1140px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div id="menu" class="box flex align-center justify-center">
                <div></div>
                <div class="content flex font-blue ">
                    <router-link to="/">Home</router-link>
                    <router-link to="/about">About</router-link>
                </div>
            </div>
            <router-view></router-view>
        </div>
    </body>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
