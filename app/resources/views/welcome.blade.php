@extends('layouts.welcome')

@section('content')
        <div class="flex-center position-ref full-height">
        <pre style="position: absolute;top:30px;">
        @php $queries = DB::getQueryLog();print_r ($queries); @endphp
        </pre>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                {{ config('app.name', 'Laravel') }}
                
                </div>
               <img style="width:250px" src="https://cdn.dribbble.com/users/10549/screenshots/3062682/build.png">
                <div class="links">
                    <a href="https://paymon.ru/faq-rus.html">Documentation</a>
                    <a href="https://paymon.ru/faq-rus.html">Screenshots</a>
                    <a href="https://paymon.ru/faq-rus.html">News</a>
                    <a href="https://paymon.ru/faq-rus.html">People</a>
                    <a href="https://paymon.ru/faq-rus.html">f.a.q</a>
                </div>
            </div>
        </div>
        @endsection

