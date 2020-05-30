@extends('layouts.app')

@section('content')
    <div class="container flex items-center mx-auto mt-20 md:ml-56 bg-gray-800 shadow-md">
        <h1 class="text-white-700 text-md font-semibold mb-2"></h1>
        <p class="block text-sm text-white-500 font-bold mt-5 text-center">Your email has been verified successfully
        <a href="{{route('login')}}" class="hover:text-orange-500">Login here</a></p>
    </div>
@endsection