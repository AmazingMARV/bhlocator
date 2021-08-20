@extends('layouts.client')
@section('content')

<div class="container mt-5">
        <h2>My Reservations</h2>
        <hr>
        <div class="row row-margin">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/apartment2.jpg" class="d-block w-100" alt="First Picture">
                      </div>
                      <div class="carousel-item">
                        <img src="img/bg.jpg" class="d-block w-100" alt="Second Picture">
                      </div>
                      <div class="carousel-item">
                        <img src="img/apartment1.jfif" class="d-block w-100" alt="Third Picture">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div> <!--col end div-->
            <div class="col-md-7 ">
              <h2>Amparado and Alab Boarding House</h2>
             
             
                <div class="tab-pane active" id="desc">
                  <div class="row">
                     <div class="col">
                       <h3 class="mb-3">Description</h3>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                    

              <p class="mt-4">Price : 700 / Month</p>
              <p class="mt-4">Availability : 2/10</p>
              
            </div> <!--end col div-->

            <button type="button" class="btn btn-primary">Reserved</button>
            
        </div> <!-- row end div-->
        
    </div> <!-- container end div-->

@endsection