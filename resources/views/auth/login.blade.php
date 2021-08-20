@extends('layouts.app')

@section('content')

    <div class="login-container">
        <div class="login-panel effect1">
            <h2>Account Login</h2>
            <hr>
            <form id="form-submit" method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
                    <label for="floatingInput">Username</label>
                    @error('username')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="/register-client">Register New Account Here</a>
            </form>

        </div>
    </div>

@endsection
