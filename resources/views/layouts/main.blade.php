<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about.index')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.index')}}">Contactc</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        @yield('content')
    </div>
</body>

</html>