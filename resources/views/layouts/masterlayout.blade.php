<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
    <title>Blade Template - @yield('title', 'Website')</title>
</head>
<body>
    @includeIf('pages.header')

    <div class="container">

        @section('navbar')    
            <a href={{ route('home') }}>Home</a>
            <a href={{ route('about') }}>About us</a>
            <a href={{ route('post') }}>Posts</a>
        @show

        @hasSection ('content')
            @yield('content')
        @else
            <h2>No Content</h2>
        @endif
        
    </div>

@includeIf('pages.footer')

@includeIf('pages.name')

@stack('script')
</body>
</html>

