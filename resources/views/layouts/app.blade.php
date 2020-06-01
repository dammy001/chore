<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="font-sans bg-gray-900 text-white">

        <nav class="flex items-center justify-between flex-wrap p-6 bg-gray-800 shadow-md">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <span class="font-semibold text-xl tracking-tight">Chore Movies</span>
            </div>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              <div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4 hover:text-orange-400">
                  Movies
                </a>
                <a href="{{route('tv-shows')}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-400 mr-4">
                  TV Shows
                </a>
                <a href="{{route('top-rated')}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-400">
                  Top Rated
                </a>
              </div>
              <div class="relative">
                <form method="POST" action="{{route('search')}}">
                    @csrf
                    <input type="text" name="movie" class="rounded-full bg-gray-700 w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search" />
                </form>
            </div>
            <div class="ml-4">
                <ul class="flex items-center text-sm">
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
          </nav>
        {{-- <nav class="border-b border-gray-700">
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
        </nav> --}}

        @yield('content')
    </body>
</html>
