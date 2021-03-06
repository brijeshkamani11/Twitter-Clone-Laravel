<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<script src="http://unpkg.com/turbolinks"></script>
<div id="app">
    <section class="pl-5 py-3 ">
        <header class="container mx-auto ">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#00acee" class="bi bi-twitter"
                 viewBox="0 0 16 16">
                <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>

            <span class="pl-1 align-bottom align-self-center h4"
                  style="color: #00acee; letter-spacing: 3px;">Twitter</span>
            <div style="float: right">
                @auth
                    <span> <img height="40" width="40" class="rounded-circle" src="{{auth()->user()->avatar}}">
                       <span>
                           <form action="{{ route('logout') }}" method="POST" class="d-inline-flex">
                            @csrf
                            <button class="btn btn-link" type="submit">Logout</button>
                           </form>
                        </span>
                    </span>
                @endauth
            </div>

        </header>
    </section>
    <section class="pl-5">
        <main class="container mx-auto">
            <div class="d-flex  mt-3">
                @auth()
                    <div class="">
                        @include('sidebar_links')
                    </div>
                @endauth

                <div class="flex-fill">
                @yield('content')
                <!-- Home.blade.php file-->
                </div>
                @auth()
                    <div class="justify-content-end">
                        @include('friends_list')
                    </div>
                @endauth

            </div>

        </main>
    </section>
</div>
</body>
</html>
