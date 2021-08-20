@extends('layouts.client')
@section('content')
<div class="container bh-container">
        <div class="row">
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
              <ul class="nav nav-tabs mb-3">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#desc">Desciprtion</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#house-rules">House Rules</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#loc">Location</a></li>

              </ul> 
              <div class="tab-content">
                <!-- Description -->
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
                    

                  </div>
                </div>
                <!-- House Rules -->
                <div class="tab-pane" id="house-rules">
                  <div class="row">
                     <div class="col">
                       <h3 class="mb-3">House Rules</h3>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                    

                  </div>
                </div>
                

                 <!-- Contract and Payment -->
                 <div class="tab-pane" id="loc">
                  <div class="row">
                     <div class="col">
                       <h3 class="mb-3">Location</h3>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                    

                  </div>
                </div> <!--col end div-->

              </div> <!-- tab content end div-->
              <p class="mt-4">Price : 700 / Month</p>
              <p class="mt-4">Availability : 2/10</p>
              <button type="button" class="btn btn-primary">Reserve</button>
            </div> <!--end col div-->
            
        </div> <!-- row end div-->
        
    </div> <!-- container end div-->

    <!-- Comment and Reviews -->

    <div class="container mt-5">
      <section>
        <h3>Comment and Reviews</h3>
        <div class="comment-container">
          <p>Total Reviews: <img src="img/rating.png"></p>
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Leave a Comment
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Leave a comment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="Enter Your Name">
                      <label for="floatingInput">Enter Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingSelect">Your Rating</label>
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
    </div>
@endsection