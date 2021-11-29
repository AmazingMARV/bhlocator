@extends('layouts.owner')
@section('content')
<div class="container">
        <div class="row col-md-6 offset-md-3">
            <h3 class="mb-3">Edit Room / Bed Information</h3>
            <hr>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="{{ $bedroom->bedroom_name }}" id="bedroom_name" name="bedroom_name" placeholder="Bed / Room Name">
                <label for="bedroom_name">Bed / Room Name</label>
                <span class="text-danger" id="error-bedroom_name"></span>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="{{ $bedroom->price }}" id="price"  name="price" placeholder="Price">
                <label for="price">Price</label>
                <span class="text-danger" id="error-price" ></span>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="is_available" value="{{ $bedroom->availability }}">
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                </select>
                <label for="is_available">Availability</label>
                <span class="text-danger" id="error-is_available"></span>
            </div>


            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Amenities" id="bed_amenities"name="bed_amenities" style="height: 100px"> {{$bedroom->bed_amenities}} </textarea>
                <label for="bed_amenities">Amenities</label>
                <span class="text-danger" id="error-bed_amenities" ></span>
            </div>

            <h2>Boarding House Image</h2>

            <div class="text-center">
                <img src="{{ asset('storage/beds/' . $bedroom->bed_img)  }}" class="rounded" alt="..." width="250px" height="250px">
            </div>

            <div class="mb-5">
                <label for="bed_img" class="form-label" >Upload photo of your boaring house/apartment</label>
                <input class="form-control" type="file" id="bed_img" name="bed_img" value="{{ $bedroom->bed_img }}">
                <span class="text-danger" id="error-upload" ></span>

            </div>


            <div class="d-flex justify-content-start">

                <button class="btn btn-primary"  onclick="submitUpdate()" style="padding:5px 30px;" id="bedInfo">Save</button>

            </div>
        </div>
</div>
    <script>


        var bedroom_name = document.getElementById('bedroom_name');
        var price = document.getElementById('price');
        // let bed_img = document.getElementById('bed_img');
        // let is_available = document.getElementById('is_available');
        // let bed_amenities = document.getElementById('bed_amenities');


        function clearDataForms(){
            document.getElementById('error-bedroom_name').innerText = "";
            document.getElementById('error-price').innerText = "";
            document.getElementById('error-is_available').innerText = "";
            document.getElementById('error-bed_amenities').innerText = "";
            document.getElementById('error-upload').innerText = "";
        }


        function submitUpdate(){

            clearDataForms();





            var frmData = new FormData();

            frmData.append('bedroom_name', bedroom_name.value);
            frmData.append('price', price.value);
            // formData.append('bed_img', bed_img.files[0]);
            // formData.append('is_available', is_available.value);
            // formData.append('bed_amenities', bed_amenities.value);


            axios.put('/bhouse-edit-bed/{{$bedroom->bedroom_id}}', frmData).then(res=>{

                if(res.data.status === 'success'){
                    //alert('Successfully saved.');
                    //window.location = "/bhouse-view-bed/{{$bedroom->bedroom_id}}"
                    console.log(res.data);
                }
            });
        }
    </script>
@endsection
