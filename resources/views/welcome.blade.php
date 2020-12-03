<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta_name="crsf-token" content="{{csrf_token()}}">

        <title>{{config('app.name', 'California Fit Gym')}}</title>

       
        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Styles -->
        <script src="{{asset('js/app.js')}}" defer></script>

    </head>
    <body class>
        <div class>
            @if (Route::has('login'))
                <div class>
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div>
        
        <main>
            @yield('content')
        </main>

        </div>

        <h1> Bona is here </h1>
    </body>
</html>
