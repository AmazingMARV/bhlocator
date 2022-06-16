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
            position: fixed;
            height: 100%;
        }

        .w-content{
            margin-left: 280px;
            padding-left: 15px;
        }
    </style>

</head>
<body>

<div id="app">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark w-sidebar">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">ADMIN DASHBOARD</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/admin-dashboard" class="nav-link {{ (request()->is('admin-dashboard*')) ? 'active' : 'text-white' }}" aria-current="page">
                    <span class="mdi mdi-home"></span>
                    CLIENT ACCOUNTS
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin-approve" class="nav-link {{ (request()->is('admin-approve*')) ? 'active' : 'text-white' }}" aria-current="page">
                    <span class="mdi mdi-home"></span>
                    OWNER ACCOUNTS
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ (request()->is('dashboard*')) ? 'active' : 'text-white' }}" aria-current="page">
                    <span class="mdi mdi-home"></span>
                    BHOUSE MANAGEMENT
                </a>
            </li>
            

        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              
                <strong>{{strtoupper(Auth::user()->fname)}}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

               
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
