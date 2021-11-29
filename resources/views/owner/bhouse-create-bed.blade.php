@extends('layouts.owner')
@section('content')
<div class="container">
        <div class="row col-md-6 offset-md-3">
            <h3 class="mb-3">Room / Bed Information</h3>
            <hr>
            <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="bedroom_name" name="bedroom_name" placeholder="Bed / Room Name">
                      <label for="bedroom_name">Bed / Room Name</label>
                    <span class="text-danger" id="error-bedroom_name"></span>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="price"  name="price" placeholder="Price">
                        <label for="price">Price</label>
                    <span class="text-danger" id="error-price" ></span>

                    </div>

                        <div class="form-floating mb-3">
                                <select class="form-select" id="is_available">
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
                                </select>
                                <label for="is_available">Availability</label>
                                <span class="text-danger" id="error-is_available"></span>
                        </div>


                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Amenities" id="bed_amenities" name="bed_amenities" style="height: 100px"></textarea>
                      <label for="bed_amenities">Amenities</label>
                    <span class="text-danger" id="error-bed_amenities" ></span>

                    </div>

                    <div class="mb-5">
                        <label for="bed_img" class="form-label" >Upload photo of your boaring house/apartment</label>
                        <input class="form-control" type="file" id="bed_img" name="bed_img">
                        <span class="text-danger" id="error-upload" ></span>

                    </div>


                      <div class="d-flex justify-content-start">

                          <button type ="button" class="btn btn-primary" style="padding:5px 30px;" id="bedInfo">Save</button>

                      </div>

        </div>
    </div>

    <script>



        function clearDataForms(){
            document.getElementById('error-bedroom_name').innerText = "";
            document.getElementById('error-price').innerText = "";
            document.getElementById('error-is_available').innerText = "";
            document.getElementById('error-bed_amenities').innerText = "";
            document.getElementById('error-upload').innerText = "";
        }

        var bedroom_name = document.getElementById('bedroom_name');
        var price = document.getElementById('price');
        var is_available = document.getElementById('is_available');
        var bed_amenities = document.getElementById('bed_amenities');
        var bed_img = document.getElementById('bed_img');
        var button = document.getElementById('bedInfo')



        button.addEventListener('click', function(){

            clearDataForms();

            var formData = new FormData();

            formData.append('bedroom_name', bedroom_name.value);
            formData.append('price', price.value);
            formData.append('bed_img', bed_img.files[0]);
            formData.append('is_available', is_available.value);
            formData.append('bed_amenities', bed_amenities.value);



            axios.post('/bhouse-view-bed/{{$id}}/store', formData).then(res=>{
                if(res.data.status === 'success'){
                    alert('Successfully saved.');
                    window.location = "/bhouse-view-bed/{{$id}}"
                }
            }).catch(err=>{
                //error and input handler



                if(err.response.data.errors.bed_img){
                    document.getElementById('error-upload').innerText = err.response.data.errors.bed_img[0];
                }

                if(err.response.data.errors.bedroom_name){
                    document.getElementById('error-bedroom_name').innerText = err.response.data.errors.bedroom_name[0];
                }

                if(err.response.data.errors.price){
                    document.getElementById('error-price').innerText = err.response.data.errors.price[0];
                }

                if(err.response.data.errors.is_available){
                    document.getElementById('error-is_available').innerText = err.response.data.errors.is_available[0];
                }

                if(err.response.data.errors.bed_amenities){
                    document.getElementById('error-bed_amenities').innerText = err.response.data.errors.bed_amenities[0];
                }

            });
        });

    </script>
@endsection
