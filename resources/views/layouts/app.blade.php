<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-700">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6 py-6">
                <ul class="flex items-center flex-col md:flex-row">
                    <li>
                        <a href="{{url('/')}}" class="font-bold text-lg">Chore Movies</a>
                    </li>
                    <li class="md:ml-16">
                        <a href="#" class="hover:text-orange-400">Movies</a>
                    </li>
                    <li class="md:ml-6">
                        <a href="{{route('tv-shows')}}" class="hover:text-orange-400">Tv Shows</a>
                    </li>
                    <li class="md:ml-6">
                        <a href="{{route('top-rated')}}" class="hover:text-orange-400">Top Rated</a>
                    </li>
                </ul>
                <div class="flex items-center flex-col md:flex-row">
                    <div class="relative">
                        <form method="POST" action="{{route('search')}}">
                            @csrf
                            <input type="text" name="movie" class="rounded-full bg-gray-700 w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search" />
                        </form>
                    </div>
                    <div class="ml-4">
                        <ul class="flex items-center">
                            @auth
                                <li>
                                    <a href="{{route('logout')}}" class="hover:text-orange-400">Logout</a>
                                </li>
                            @endauth

                            @guest
                                <li>
                                    <a href="{{route('login')}}" class="hover:text-orange-400">Login</a>
                                </li>
                                <li class="ml-6">
                                    <a href="{{route('register')}}" class="hover:text-orange-400">Register</a>
                                </li>
                            @endguest

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </body>
</html>
