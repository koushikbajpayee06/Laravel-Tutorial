<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yahoo Baba</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>YahooBaba - @yield('title')</h1>
        </header>

        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
        </nav>

        <main>
            <article>
                @hasSection ('content')
                     @yield('content')
                @else
                    <h2>No Content Found.</h2>
                @endif
              

            </article>
            
            <aside>
               @section('sidebar')
                    <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('mypost')}}">Post</a></li>
                </ul>
               @show
            </aside>
        </main>
        <footer>yahoobaba©copyright 2023.</footer>
    </div>
    @stack('scripts')
</body>
</html>