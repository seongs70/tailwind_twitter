{{--<!DOCTYPE html>--}}


{{--    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}
{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <link rel="stylesheet" href="/css/main.css">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="component">--}}
{{--    <div class="flex-center position-ref full-height">--}}
{{--        @if (Route::has('login'))--}}
{{--            <div class="top-right links">--}}
{{--                @auth--}}
{{--                    <a href="{{ url('/home') }}">Home</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}">Login</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}">Register</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="content">--}}
{{--            <div class="title m-b-md">--}}
{{--                Laravel--}}
{{--            </div>--}}

{{--            <div class="links">--}}
{{--            <div class="links">--}}
{{--                <a href="https://laravel.com/docs">Docs</a>--}}
{{--                <a href="https://laracasts.com">Laracasts</a>--}}
{{--                <a href="https://laravel-news.com">News</a>--}}
{{--                <a href="https://blog.laravel.com">Blog</a>--}}
{{--                <a href="https://nova.laravel.com">Nova</a>--}}
{{--                <a href="https://forge.laravel.com">Forge</a>--}}
{{--                <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--    </html>--}}





    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Example - Twitter</title>

</head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href={{ asset('css/main.css') }}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="bg-gray-100 font-sans">
<div class="bg-white">
    <div class="container mx-auto flex items-center py-4">
        <nav class="w-2/5">
            <a href="" class="top-nav-item"><i class="fa fa-home fa-lg">Home</i></a>
            <a href="" class="top-nav-item"><i class="fa fa-bol fa-lg">Moment</i></a>
            <a href="" class="top-nav-item"><i class="fa fa-bell fa-lg">Notification</i></a>
            <a href="" class="top-nav-item"><i class="fa fa-envelope fa-lg">Messages</i></a>
        </nav>
        <div class="w-1/5 text-center"><a href=""><i class="fa fa-twitter fa-lg text-blue"></i></a></div>
        <div class="w-2/5 flex justify-end">
            <div class="mr-4 relative">
                <input type="text" class="bg-gray-300 h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search twitter">
                <span class="flex items-center absolute right-0 inset-y-0 mr-3"><i class="fa fa-search text-grey-100"></i></span>
            </div>
            <div class="mr-4"><a href=""><img src="/img/twitter/avatar.jpg" alt="avatar.jpg" class="h-8 w-8 rounded-full"></a></div>
            <div><button class="bg-teal-400 hover:bg-teal-dark-200 text-white font-medium py-2 px-4 rounded-full">Tweet</button></div>
        </div> {{-- end container--}}
    </div>

    <div class="hero h-112 bg-cover"></div>
</div>
</body>
</html>
