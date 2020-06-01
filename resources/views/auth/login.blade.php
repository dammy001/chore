@extends('layouts.app')

@section('content')
<div class="flex mx-8 md:flex">
    <div class="md:w-1/3"></div>
    <div class="mt-8 w-full md:w-1/3 md:mt-24 md:ml-3">
        <form class="bg-gray-800 shadow-md rounded px-8 pt-8 pb-8 mb-4" method="POST" action="{{route('login')}}">
            @csrf
        <div class="mb-5">
            <label class="block uppercase text-white-500 text-sm font-semibold mb-2">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="email" type="email" placeholder="Email"/>
        </div>
        <div class="mb-6">
            <label class="block uppercase text-white-500 text-sm font-semibold mb-2">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            name="password" type="password" placeholder="******************" />

        </div>
        <div class="flex items-center justify-center">
            <button class="bg-gray-600 block shadow:md hover:bg-gray-700 text-white font-bold w-full py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Sign In
            </button>
        </div>
        <p class="block text-sm text-white-500 font-bold mt-5 text-center">Don't have an account?
        <a href="{{route('register')}}" class="hover:text-orange-500"> Register</a>
        </p>
        </form>
    </div>
  </div>
@endsection
