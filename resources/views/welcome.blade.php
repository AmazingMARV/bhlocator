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

    <div class="top-boarding-houses">
        <h2>TOP BOARDING HOUSES</h2>
        <hr>

        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/apartment2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Amparado Boarding House</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/apartment2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Amparado Boarding House</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/apartment2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Amparado Boarding House</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/apartment2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Amparado Boarding House</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>


        </div>
    </div> <!-- close div for top-boarding-houses-->
@endsection
