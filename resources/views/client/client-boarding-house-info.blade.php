@extends('layouts.client')
@section('content')
<div class="bhouse-header mt-5">
  <h2>Amparado and Alab Boarding House</h2>
</div>

<div class="bh-container">
  <div class="col-md-7">
    <ul class="nav nav-tabs mb-3">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#bed">Bed</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#loc">Location</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#desc">Description</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#house_rule">House Rule</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#comment">Comments and Review</a></li>
    </ul> 
    <div class="tab-content">
      <!-- Bed -->
      <div class="tab-pane active" id="bed">
        <div class="row">
          <div class="col">
            <div class="card mb-3" style="max-width: 850px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="..." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Bed Name</h5>
                    <p class="card-text">Amenities</p>
                    <p class="card-text"><small class="text-muted">Price</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- end div-->
        </div>
      </div> <!-- tab pane end div-->

      <!-- Location -->
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
      </div> <!-- tab pane end div-->

      <!-- Description -->
      <div class="tab-pane" id="desc">
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
      </div> <!-- tab pane end div-->

      <!-- House Rules -->
      <div class="tab-pane" id="house_rule">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">House Rule</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
      </div> <!-- tab pane end div-->

      <!-- Comment and Review  -->
      <div class="tab-pane" id="comment">
        <div class="row">
          <div class="col">
            <h3 class="mb-3">Comment and Review</h3>
            
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
      </div> <!-- tab pane end div-->

    </div> <!--end col div-->
  </div> <!-- col end div-->
</div> <!-- container end div-->
@endsection