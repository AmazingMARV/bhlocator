@extends('layouts.owner')

@section('content')
<div class="container">

    <h3 class="mt-3 mb-3 d-flex justify-content-center">Boarding House / Apartment Listing</h3>


    <div class="bhouse-wrapper">
        @foreach($bhouses as $bhouse)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/storage/bhouses/{{$bhouse->bhouse_img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $bhouse->bhouse_name }}</h5>
                    <p class="card-text">{{ $bhouse->bhouse_desc }}</p>
                    <a href="/bhouse-view-bed" class="btn btn-primary">VIEW BED</a>
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn-warning">EDIT</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        @endforeach
    </div>

    <a class="btn btn-success mt-3 btn-create-dashboard" href="/dashboard/create" role="button">ADD / NEW</a>
</div>

@endsection
