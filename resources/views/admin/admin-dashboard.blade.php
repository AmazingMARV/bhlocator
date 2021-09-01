@extends('layouts.admin')
@section('content')
<div class="container">
        <h3 class="mt-3 mb-3 d-flex justify-content-center">User List</h3>
        <div class="row col-md-6 offset-md-3 d-flex justify-content-center">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Midle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Marvilowe</td>
                    <td> Toraja </td>
                    <td> Alab </td>
                    <td>
                        <a class="btn btn-primary mb-3" href="#" role="button">Edit</a> 
                        <a class="btn btn-primary" href="#" role="button">Delete</a>
                    </td>
                  </tr>
                  <tr>
                      
                      <th scope="row">2</th>
                    <td>Marvilowe</td>
                    <td> Toraja </td>
                    <td> Alab </td>
                    <td>
                        <a class="btn btn-primary mb-3" href="#" role="button">Edit</a> 
                        <a class="btn btn-primary" href="#" role="button">Delete</a>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
              
        </div>
        <div>
        <a class="btn btn-primary" href="#" role="button">Create New Account</a>
    </div>
</div>
@endsection