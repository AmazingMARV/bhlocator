@extends('layouts.app')

@section('content')

    <div class="login-container">
        <div class="login-panel effect1">
            <h2>Account Login</h2>
            <hr>
            <form id="form-submit">
                <div class="form-floating mb-3">
                    <input type="text" id="username" class="form-control" placeholder="Username" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="/register-client">Register New Account Here</a>
            </form>

        </div>
    </div>
@endsection
