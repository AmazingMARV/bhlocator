@extends('layouts.client')
@section('content')
      <div class="container car-container">
          <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="img/apartment2.jpg" class="d-block w-100" alt="First Picture">
                          </div>
                          <div class="carousel-item">
                              <img src="img/bg.jpg" class="d-block w-100" alt="Second Picture">
                          </div>
                          <div class="carousel-item">
                              <img src="img/apartment1.jpg" class="d-block w-100" alt="Third Picture">
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
              </div>
          </div>
      </div>

      <div class="container board-container">
          <h2>Boarding Houses</h2>
          <hr>
          <div class="row myboarding">
              <div class="col-md-3">
                  <div class="product-top">
                      <img src="img/apartment2.jpg">
                      <div class="overlay text-center">
                          <p>Amparado Boarding House</p>
                      </div>
                  </div>
                  <div class="product-bottom text-center">
                      <a href="/client-boarding-house-info" class="btn btn-secondary">Click To Visit</a>
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="product-top">
                      <img src="img/apartment2.jpg">
                      <div class="overlay text-center">
                          <p>Amparado Boarding House and Apartment</p>
                      </div>
                  </div>
                  <div class="product-bottom text-center">
                      <a href="/client-boarding-house-info" class="btn btn-secondary">Click To Visit</a>
                  </div>
              </div>

              <div class="col-md-3">
                <div class="product-top">
                    <img src="img/apartment2.jpg">
                    <div class="overlay text-center">
                        <p>Alab Boarding House</p>

                    </div>
                </div>
                <div class="product-bottom text-center">
                  <a href="/client-boarding-house-info" class="btn btn-secondary">Click To Visit</a>

                </div>
              </div>

          </div>

      </div>

@endsection
