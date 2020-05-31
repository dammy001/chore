@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-500">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/movie.jpg" alt="movie" class="w-76 md:w-96 h-54">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Extraction (2020)</h2>
                <div class="flex items-center text-gray-400 flex-wrap text-sm md:flex-row">
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
                    hover:bg-orange-700 transition ease-in-out duration-150">
                    <svg id="Capa_1" class="w-6 h-4 fill-current" enable-background="new 0 0 515.558 515.558" height="512" viewBox="0 0 515.558 515.558" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/></svg>
                    Play Triller</button>
                </div>
            </div>

        </div>
    </div>

    <div class="cast border-b border-gray-600">
        <div class="mx-auto px-24 py-16 items-center">
            <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Cast</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-orange-400 text-md">Damilare Anjorin</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span>star</span>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-orange-400 text-md">Damilare Anjorin</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span>star</span>
                            </div>
                            
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-orange-400 text-md">Damilare Anjorin</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span>star</span>
                            </div>
                            
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-orange-400 text-md">Damilare Anjorin</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span>star</span>
                            </div>
                            
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-orange-400 text-md">Damilare Anjorin</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span>star</span>
                            </div>
                            
                        </div>
                    </div>
    
                </div>
        </div>
    </div>

    <div class="cast border-b border-gray-600">
        <div class="mx-auto px-12 py-16 items-center">
            <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Images</h2>
                <div class="grid px-24 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="h-74 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        
                    </div>

                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="h-74 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        
                    </div>
                    
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        
                    </div>

                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/movie.jpg" alt="extraction" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        
                    </div>
    
                </div>
        </div>
    </div>
@endsection
