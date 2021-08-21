@extends('layouts.owner')

@section('content')
<div class="container">
        <h3 class="mt-3 mb-3 d-flex justify-content-center">Boarding House / Apartment Listing</h3>
        <div class="row col-md-6 offset-md-3 d-flex justify-content-center">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Boarding House Name</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Amparado Boarding House</td>
                    <td>
                      <a class="btn btn-primary" href="/bhouse-create-bed" role="button">Create New Listing</a>
                        

                    </td>

                  </tr>
                  <tr>
                      
                      <th scope="row">2</th>
                    <td>Amparado Apartment</td>
                    <td>
                       
                    <a class="btn btn-primary" href="/bhouse-create-bed" role="button">Create New Listing</a>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
              
        </div>
        <div>
        <a class="btn btn-primary" href="/bhouse-create" role="button">Create New Listing</a>
        </div>
    </div>
@endsection