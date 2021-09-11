@extends('layouts.owner')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-3">Apartment / Boarding House Information</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="bhouse_name" name="bhouse_name" placeholder="Enter">
                    <label for="bhouse_name">Name of the Bhouse/Apartment</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Description" id="bhouse_desc" name="bhouse_desc"style="height: 100px"></textarea>
                    <label for="bhouse_desc">Description</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="House Rules" id="bhouse_rule" name="bhouse_rule" style="height: 100px"></textarea>
                    <label for="bhouse_rule">House Rules</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">

                    <label for="bhouse_img" class="form-label">Upload photo of your boarding house/apartment</label>
                    <input class="form-control" type="file" id="bhouse_img" name="bhouse_img">
                    <span class="text-danger" id="error-upload"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">

                    <input type="text" class="form-control" id="loc_description" name="loc_description"placeholder="Location">
                    <label for="loc_description">Location Description</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="loc_x" name="loc_x" placeholder="Location">
                    <label for="loc_x">Location X</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="loc_y" name="loc_y" placeholder="Location">
                    <label for="loc_y">Location Y</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" style="padding:5px 30px;" id="bhInfo">Save</button>
            </div>
        </div>

    </div> <!--container-->

   

    <script>

        var bhouse_name = document.getElementById('bhouse_name');
        var bhouse_desc = document.getElementById('bhouse_desc');
        var bhouse_img = document.getElementById('bhouse_img');
        var bhouse_rule = document.getElementById('bhouse_rule');
        var loc_description = document.getElementById('loc_description');
        var loc_x = document.getElementById('loc_x');
        var loc_y = document.getElementById('loc_y');
        var button = document.getElementById('bhInfo');

        
        button.addEventListener('click', function(){

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
            });
        });
    </script>
@endsection
