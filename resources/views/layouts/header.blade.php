<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="" />
                </svg>
                <img src="{{ asset('img/background.jpg') }}" class="bd-placeholder-img" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Wonderful Journey</h1>
                        <p>Blog of Indonesia Tourism</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        @if (!Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/article/category/Beach">Beach</a></li>
                                    <li><a class="dropdown-item" href="/article/category/Mountain">Mountain</a></li>
                                    <li><a class="dropdown-item" href="/article/category/Forest">Forest</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/aboutUs">About Us</a>
                            </li>
                        @else
                            @can('isAdmin')
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/admin">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/user">User</a>
                                </li>
                            @endcan

                            @can('isMember')
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/profil">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/blog">Blog</a>
                                </li>
                            @endcan
                        @endif

                    </ul>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        @if (!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/register">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/login">
                                    <span><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                    Login
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/logout">
                                    <span><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                    Logout
                                </a>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
        <div class="bg-light p-4">
            @yield('content')
        </div>

    </div>

</body>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</html>
