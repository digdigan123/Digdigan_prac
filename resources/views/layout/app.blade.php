<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('collection') }}">Collection</a>
        <a href="{{ route('packages') }}">Packages</a>
            
           
            
            @if(auth()->check())
                <a href="{{route('logout')}}">Log Out</a>
            @else
               
                <a href="{{ route('attendees') }}">Attendees</a>
                
               
                
                <a href="{{ route('login') }}">Log In</a>
                

            @endif
            
        </nav>
    </header>

    @yield('content')
</body>
</html>