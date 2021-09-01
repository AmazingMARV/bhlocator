@extends('layouts.owner')
@section('content')
<div class="container">
        <div class="row col-md-6 offset-md-3">
            <h3 class="mb-3">Room / Bed Information</h3>
            <hr>
            <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="bed_name" name="bed_name" placeholder="Bed / Room Name">
                      <label for="bed_name">Bed / Room Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="price"  name="price" placeholder="Price">
                        <label for="price">Price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="availability" name="availability" placeholder="Availability">
                        <label for="availability">Availability</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Amenities" id="amenities" name="amenities" style="height: 100px"></textarea>
                      <label for="amenities">Amenities</label>
                    </div>
                    <div class="mb-5">
                        <label for="BEDimg" class="form-label" >Upload photo of your boaring house/apartment</label>
                        <input class="form-control" type="file" id="BEDimg" name="BEDimg">
                      </div>
                    
                    
                      <div class="d-flex justify-content-start">
              
                          <button type="button" class="btn btn-primary" style="padding:5px 30px;">Save</button>
                          
                      </div>
                    
        </div>
    </div>
@endsection