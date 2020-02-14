<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">laravel</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('admin')}}">Admin</a></li>
                </ul>
            </div>
        </nav>

        @yield('home')
        @yield('admin')
    </body>
</html>