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
        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key='.env('API_KEY').'&language=en-US&page=1');

        $response->successful() ? $data = $response->body() : null;
        $result = json_decode($data, true);

        $nowPlaying = $this->nowPlaying();

        return view('index', [
            'results' => $result["results"],
            'now' => $nowPlaying['results']
        ]);
    }

    public function show($movie_id)
    {
        $response = Http::withToken(env('MOVIE_TOKEN'))
        ->get('https://api.themoviedb.org/3/movie/'.$movie_id.'?api_key=api_key='.env('API_KEY').'&language=en-US');

        $response->successful() ? $data = $response->body() : $response->failed();
        $result = json_decode($data, true);

        $casts = Http::withToken(env('MOVIE_TOKEN'))
        ->get('https://api.themoviedb.org/3/movie/'.$movie_id.'/credits?api_key='.env('API_KEY'));

        $casts->successful() ? $cast = $casts->body() : $casts->failed();
        $castResults = json_decode($cast, true);

        return view('show', [
            'result' => $result,
            'casts' => $castResults
        ]);
    }

    public function topRated()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key='.env('API_KEY').'&language=en-US&page=1');

        $response->successful() ? $data = $response->body() : $response->failed();
        $result = json_decode($data, true);

        return view('top-rated', [
            'results' => $result['results']
        ]);
    }

    protected function nowPlaying()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key='.env('API_KEY').'&language=en-US&page=1');

        $response->successful() ? $data = $response->body() : $response->failed();
        $result = json_decode($data, true);

        return $result;
    }
}
