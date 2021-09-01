@extends('layouts.owner')
@section('content')
<div class="container">
        <div class="row col-md-6 offset-md-3">
            <h3 class="mb-3">Room / Bed Information</h3>
            <hr>
            <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="bedroom_name" name="bedroom_name" placeholder="Bed / Room Name">
                      <label for="bedroom_name">Bed / Room Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="price"  name="price" placeholder="Price">
                        <label for="price">Price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="is_available" name="is_available" placeholder="Availability">
                        <label for="is_available">Availability</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Amenities" id="bed_amenities" name="bed_amenities" style="height: 100px"></textarea>
                      <label for="bed_amenities">Amenities</label>
                    </div>
                    <div class="mb-5">
                        <label for="bed_img" class="form-label" >Upload photo of your boaring house/apartment</label>
                        <input class="form-control" type="file" id="bed_img" name="bed_img">
                      </div>
                    
                    
                      <div class="d-flex justify-content-start">
              
                          <button type="button" class="btn btn-primary" style="padding:5px 30px;">Save</button>
                          
                      </div>
                    
        </div>
    </div>

    <script>
        var bedroom_name = document.getElementById('bedroom_name');
        var price = document.getElementById('price');
        var is_available = document.getElementById('is_available');
        var bed_amenities = document.getElementById('bed_amenities');
        var bed_img = document.getElementById('bed_img');
    
    </script>
@endsection