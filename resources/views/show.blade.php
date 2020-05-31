@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-500">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="/img/movie.jpg" alt="movie" class="w-96 h-54">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Extraction (2020)</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>star</span>
                    <span class="ml-1">50%</span>
                    <span class="mx-2">|</span>
                    <span>May 29th, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Comedy, Triller</span>
                </div>
                <p class="mt-8 text-gray-500">
                    A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Damilare Anjorin</div>
                            <div class="text-sm text-gray-400">Producer, Director</div>
                        </div>
                        <div class="ml-8">
                            <div>Damilare Anjorin</div>
                            <div class="text-sm text-gray-400">Producer, Director</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-800 rounded font-semibold px-5 py-4 
                    hover:bg-orange-700 transition ease-in-out duration-150">Play Triller</button>
                </div>
            </div>

        </div>
    </div>
@endsection
