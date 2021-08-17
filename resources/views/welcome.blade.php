@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="text-container">
            <div class="text-center">
                <h1>Welcome to My Boarding House Locator System</h1>
                <p>This system aims to provide an ease access in finding boarding 
                    house in Tangub City.</p>
            
                <a href="/register-client" class="btn btn-primary btn-margin">Looking for Transient Home</a>
                <a href="/register-owner" class="btn btn-primary btn-margin">I am an owner</a>
                <a href="/login" class="btn btn-primary btn-margin">Login</a>
            </div>
        </div>
    </div>
@endsection
