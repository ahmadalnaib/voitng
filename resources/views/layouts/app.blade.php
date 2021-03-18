<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dundung') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="{{route('home')}}">
                <h1 class="font-bold uppercase ">DunDung</h1>
            </a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4 ">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{route('logout')}}"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img class="w-10 h-10 rounded-full" src="" alt="">
                </a>
            </div>
        </header>

{{--    showcase--}}

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
           Add job here
        </div>
        <div class="w-175">
    <nav class="flex items-center justify-between text-xs">
        <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
            <li><a class="border-b-4 pb-3 border-blue-600" href="">All Jobs (80)</a></li>
            <li><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="#">Considering (40)</a></li>
            <li><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="#">In Progress (10)</a></li>
        </ul>
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="#">Implemented (10)</a></li>
            <li><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="#">Closed (10)</a></li>

        </ul>
    </nav>
            <div class="mt-8">
                {{$slot}}
            </div>
        </div>

    </main>
    </body>
</html>
