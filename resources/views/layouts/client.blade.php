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
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Boarding House System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/client-home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/client-reservation">My Reservation</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ strtoupper(Auth::user()->username) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/client-account-panel">Account Panel</a></li>
                                <li><a class="dropdown-item" href="/client-change-passowrd">Change Password</a></li>
                                <li><a class="dropdown-item" onclick="document.getElementById('logout-form').submit();">Log Out</a></li>
                            </ul>

                            <form method="post" action="{{ route('logout') }}" id="logout-form">
                                @csrf

                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
