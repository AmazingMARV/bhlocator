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
                <button type="button" class="btn btn-primary" style="padding:5px 30px;">Save</button>
            </div>
        </div>

    </div> <!--container-->
@endsection
