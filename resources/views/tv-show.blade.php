@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-500">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://image.tmdb.org/t/p/original/{{$result['poster_path']}}" alt="movie" class="w-76 flex md:w-96 h-54">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$result['name']}}</h2>
                <div class="flex items-center text-gray-400 flex-wrap text-sm md:flex-row">
                    <span>
                        <svg for="i in 10" :key="i" viewBox="0 0 24 24" :class="i <= {{ $result['vote_average'] }} ? 'text-orange-500' : 'text-gray-500'" class="h-4 w-12 fill-current">
                            <path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z" />
                        </svg>
                    </span>
                    <span class="mx-2">|</span>
                    <span class="ml-1"><a href="{{$result['homepage']}}" class="text-orange-500 text-semibold"> {{$result['homepage']}}</a></span>
                    <span class="mx-2">|</span>
                    <span class="ml-1">{{$result['status']}}</span>
                    <span class="mx-2">|</span>
                    <span>{{$result['first_air_date']}}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($result['genres'] as $item)
                            {{$item['name']}}
                        @endforeach

                    </span>
                    <span class="mx-2">|</span>
                    <span>
                       Episodes: {{$result['number_of_episodes'] }}
                    </span>
                    <span class="mx-2">|</span>
                    <span>
                       Seasons: {{$result['number_of_seasons'] }}
                    </span>
                </div>
                <p class="mt-8 text-gray-500">
                   {{$result['overview']}}
                </p>

                <div class="mt-12">
                    <a href="{{route('watch-tv', $result['id'])}}" class="flex w-40 items-center bg-orange-500 text-gray-800 rounded font-semibold px-5 py-4
                    hover:bg-orange-700 transition ease-in-out duration-150">
                    <svg id="Capa_1" class="w-6 h-4 fill-current" enable-background="new 0 0 515.558 515.558" height="512" viewBox="0 0 515.558 515.558" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/></svg>
                    Play Triller</a>
                </div>
            </div>

        </div>

        {{-- <div class="mt-4 mx-auto px-12">
            <h4 class="text-white font-semibold">Featured Cast</h4>
            <div class="flex mt-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                @foreach($casts['crew'] as $crew)
                <div class="flex md:flex-col">
                    <div>{{$crew['name']}}</div>
                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                </div>
                @endforeach
            </div>
            </div>
        </div> --}}
    </div>

@endsection
