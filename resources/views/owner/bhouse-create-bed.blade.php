@extends('layouts.owner')
@section('content')
<div class="container">
        <div class="row col-md-6 offset-md-3">
            <h3 class="mb-3">Room / Bed Information</h3>
            <hr>
            <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="Enter Your Name">
                      <label for="floatingInput">Bed / Room Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Your Name">
                        <label for="floatingInput">Price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Your Name">
                        <label for="floatingInput">Availability</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Amenities</label>
                    </div>
                    <div class="mb-5">
                        <label for="formFile" class="form-label">Upload photo of your boaring house/apartment</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    
                    
                      <div class="d-flex justify-content-start">
              
                          <button type="button" class="btn btn-primary" style="padding:5px 30px;">Save</button>
                          
                      </div>
                    
        </div>
    </div>
@endsection