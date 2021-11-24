@extends('layouts.owner')
@section('content')
<div class="container">
        <div class="row col-md-6 offset-md-3">
            <h3 class="mb-3">Edit Room / Bed Information</h3>
            <hr>
            <div class="form-floating mb-3">
                      <input type="text" class="form-control" value="{{ $bedrooms->bedroom_name }}" id="bedroom_name" name="bedroom_name" placeholder="Bed / Room Name">
                      <label for="bedroom_name">Bed / Room Name</label>
                    <span class="text-danger" id="error-bedroom_name"></span>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ $bedrooms->price }}" id="price"  name="price" placeholder="Price">
                        <label for="price">Price</label>
                    <span class="text-danger" id="error-price" ></span>

                    </div>
                    
                        <div class="form-floating mb-3">
                                <select class="form-select" id="is_available" value="{{ $bedrooms->availability }}">
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
                                </select>
                                <label for="is_available">Availability</label>
                                <span class="text-danger" id="error-is_available"></span>
                        </div>
 
                    
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Amenities" id="bed_amenities"name="bed_amenities" style="height: 100px"> {{$bedrooms->bed_amenities}} </textarea>
                      <label for="bed_amenities">Amenities</label>
                    <span class="text-danger" id="error-bed_amenities" ></span>

                    </div>

                    <div class="mb-5">
                        <label for="bed_img" class="form-label" >Upload photo of your boaring house/apartment</label>
                        <input class="form-control" type="file" id="bed_img" name="bed_img" value="{{ $bedrooms->bed_img }}">
                        <span class="text-danger" id="error-upload" ></span>
                        
                    </div>
                    
                    
                      <div class="d-flex justify-content-start">
              
                          <button type ="button" class="btn btn-primary" style="padding:5px 30px;" id="bedInfo">Save</button>
                          
                      </div>

                      
                    
        </div>
</div>     
       <script>
           
       </script>
@endsection