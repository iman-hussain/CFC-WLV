<!DOCTYPE html>
<html lang="en">
        <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Maidah - @yield('title')</title>
                <!--Styles-->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
                <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:300,400" rel="stylesheet">
        </head>
        <body>
                <div class="bg-dark navbar-dark text-white">
                        <div class="container">
                                <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                                <a class="navbar-brand" href="/home"><h5 class="display-5">Maidah</h5></a>
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                                <div class="navbar-nav">
                                                        <li class="{{ Request::path() === 'submit' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/submit">submit</a>
                                                        </li>
                                                        <li class="{{ Request::path() === 'location' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/location">location</a>
                                                        </li>
                                                        <li class="{{ Request::path() === 'api' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/api">api</a>
                                                        </li>
                                                        <li class="{{ Request::path() === 'about' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/about">about</a>
                                                        </li>
                                                </div>
                                                        <ul class="nav navbar-nav ml-auto">
                                                        <li class="nav-item">
                                                        <a class="nav-link" href="/signout">sign out</a>
                                                        </li>
                                                        </ul>
                                        </div>
                                </nav>
                        </div>
                </div>
                <div>
                        @yield('content')
                </div>
                <div class="container py-5">
                        <h4>With Thanks</h4>
                        <a href="https://www.imanhussain.com">Created by Iman Hussain</a></p>
                </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>
