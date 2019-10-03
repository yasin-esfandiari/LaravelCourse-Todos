@extends('layout')
    @section('title')
        new page
    @stop

    @section('preprocess')
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
    @stop

    @section('content')
        Our New Content!!!
    @stop