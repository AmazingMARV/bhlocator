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
              
                          <button class="btn btn-primary" style="padding:5px 30px;" id="bedInfo">Save</button>
                          
                      </div>
                    
        </div>
    </div>

    <script>
        // var bedroom_name = document.getElementById('bedroom_name');
        // var price = document.getElementById('price');
        // var is_available = document.getElementById('is_available');
        // var bed_amenities = document.getElementById('bed_amenities');
        // var bed_img = document.getElementById('bed_img');
        // var id = {{$id}};

        // document.getElementById('bedInfo').addEventListener('click',function(){
        //     console.log(id);
        // })
        
        
        function clearDataForms(){
            document.getElementById('error-bhouse_name').innerText = "";
            document.getElementById('error-bhouse_desc').innerText = "";
            document.getElementById('error-bhouse_rule').innerText = "";
            document.getElementById('error-upload').innerText = "";
            document.getElementById('error-loc_x').innerText = "";
            document.getElementById('error-loc_y').innerText = "";
        }

        var bhouse_name = document.getElementById('bhouse_name');
        var bhouse_desc = document.getElementById('bhouse_desc');
        var bhouse_img = document.getElementById('bhouse_img');
        var bhouse_rule = document.getElementById('bhouse_rule');
        var loc_description = document.getElementById('loc_description');
        var loc_x = document.getElementById('loc_x');
        var loc_y = document.getElementById('loc_y');
        var button = document.getElementById('bhInfo');

        
        
        button.addEventListener('click', function(){

            clearDataForms();
            
            var formData = new FormData();

            formData.append('bhouse_name', bhouse_name.value);
            formData.append('bhouse_desc', bhouse_desc.value);
            formData.append('bhouse_img', bhouse_img.files[0]);
            formData.append('bhouse_rule', bhouse_rule.value);
            formData.append('loc_description', loc_description.value);
            formData.append('loc_x', loc_x.value);
            formData.append('loc_y', loc_y.value);

        
            axios.post('/dashboard', formData).then(res=>{
                console.log(res);
                if(res.data.status === 'success'){
                    alert('Successfully saved.');
                    window.location = "/dashboard"
                }
            }).catch(err=>{
                //error and input handler
                
                if(err.response.data.errors.bhouse_img){
                    document.getElementById('error-upload').innerText = err.response.data.errors.bhouse_img[0];
                }

                if(err.response.data.errors.bhouse_name){
                    document.getElementById('error-bhouse_name').innerText = err.response.data.errors.bhouse_name[0];
                }
                
                if(err.response.data.errors.bhouse_desc){
                    document.getElementById('error-bhouse_desc').innerText = err.response.data.errors.bhouse_desc[0];
                }

                if(err.response.data.errors.bhouse_rule){
                    document.getElementById('error-bhouse_rule').innerText = err.response.data.errors.bhouse_rule[0];
                }

                if(err.response.data.errors.loc_x){
                    document.getElementById('error-loc_x').innerText = err.response.data.errors.loc_x[0];
                }

                if(err.response.data.errors.loc_x){
                    document.getElementById('error-loc_y').innerText = err.response.data.errors.loc_y[0];
                }
            });
        });
        
    </script>
@endsection