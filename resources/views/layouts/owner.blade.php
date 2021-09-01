<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('/js/axios.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sidebars.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">



    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/sidebars.js') }}"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .w-sidebar{
            position: absolute;
        }

        .w-content{
            margin-left: 280px;
            padding-left: 15px;
        }
    </style>

</head>
<body>

<div id="app">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark w-sidebar" style="width: 280px; height: 100vh; position: absolute; top: 0;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">BHOUSE DASHBOARD</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ (request()->is('dashboard*')) ? 'active' : 'text-white' }}" aria-current="page">
                    <span class="mdi mdi-home"></span>
                    DASHBOARD
                </a>
            </li>
            
            <li>
                <a href="#" class="nav-link {{ (request()->is('')) ? 'active' : 'text-white' }}">
                    <span class="mdi mdi-office-building-marker-outline"></span>
                    Location
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>BHOUSE OWNER</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" onclick="document.getElementById('logout-form').submit();">Sign out</a></li>
            </ul>

            <form method="post" action="{{ route('logout') }}" id="logout-form">
                @csrf
            </form>
        </div>
    </div>
    <div class="w-content">
        @yield('content')
    </div>

</div>
</body>
</html>
