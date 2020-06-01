@extends('layouts.app')

@section('title', 'Top Rated')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular">
    <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Search Results Found For "{{ request('movie') }}"</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

            @foreach($results as $result)
            <div class="mt-8">
                <a href="{{route('show', $result['id'])}}">
                    <img src="https://image.tmdb.org/t/p/original/{{$result['poster_path']}}" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-orange-400 text-md">{{$result['title']}}</a>
                    <div class="flex items-center text-gray-400 text-sm">
                        <span>
                            <svg for="i in 10" :key="i" viewBox="0 0 24 24" :class="i <= {{ $result['vote_average'] }} ? 'text-orange-500' : 'text-gray-500'" class="h-4 w-4 fill-current">
                                <path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z" />
                            </svg>
                        </span>
                    <span class="mx-2">|</span>
                    <span></span>
                <span class="mx-2">|</span>
                <span>{{$result['release_date']}}</span>
                <span class="mx-2">|</span>

                    </div>
                    <div class="text-gray-400 text-sm">

                    </div>
                    @auth
                   {{--  <div class="mt-3">
                        <a href=""class="bg-orange-600 block hover:bg-gray-700 items-center text-white font-bold w-full py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            View Details
                        </a>
                    </div> --}}
                    @endauth

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
