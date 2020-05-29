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
            <div class="container mx-auto flex items-center justify-between px-6 py-6">
                <ul class="flex items-center">
                    <li>
                        <a href="#" class="font-bold text-lg">Chore Movies</a>
                    </li>
                    <li class="ml-16">
                        <a href="#">Movies</a>
                    </li>
                    <li class="ml-6">
                        <a href="#">Actors</a>
                    </li>
                    <li class="ml-6">
                        <a href="#">TV Shows</a>
                    </li>
                </ul>
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" class="rounded-full bg-gray-700 w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search" />
                    </div>
                    <div class="ml-4">
                        <ul class="flex items-center">
                            @auth
                                <li>
                                    <a href="#">Logout</a>
                                </li>
                            @endauth

                            @guest
                                <li>
                                    <a href="#" class="hover:text-gray-400">Login</a>
                                </li>
                                <li class="ml-6">
                                    <a href="#" class="hover:text-gray-400">Register</a>
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
