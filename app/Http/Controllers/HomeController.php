<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $response = Http::withToken('token')->post(...);

        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key='.env('API_KEY').'&language=en-US&page=1');

        $response->successful() ? $data = $response->body() : null;
        $result = json_decode($data, true);

        return view('index', [
            'results' => $result["results"]
        ]);
    }

    public function show($movie_id)
    {
        $response = Http::withToken(env('MOVIE_TOKEN'))
        ->get('https://api.themoviedb.org/3/movie/'.$movie_id.'?api_key=api_key='.env('API_KEY').'&language=en-US');

        $response->successful() ? $data = $response->body() : null;
        $result = json_decode($data, true);

        $image = Http::withToken(env('MOVIE_TOKEN'))
        ->get('https://api.themoviedb.org/3/movie/'.$movie_id.'?api_key=api_key='.env('API_KEY').'&language=en-US');

        $imageResult = $image->body();

        return view('show', [
            'result' => $result
        ]);
    }
}
