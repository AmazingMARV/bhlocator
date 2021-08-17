@extends('layouts.app')

@section('content')
<div class="register-container">
    <div class="container">
        <div class="row col-lg-6 offset-lg-3 col-sm-12">

            <form action="/register-client" method="post" id="form-submit">
                <div class="container"> 
                    <div class="row">
                        <h2>REGISTRATION</h2>
                         <hr>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" id="username" class="form-control"  placeholder="Username">
                                <label for="floatingInput">Username</label>
                              </div>
                              
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3">
                                <input type="password" id="password" class="form-control" placeholder="Password">
                                <label for="floatingInput">Password</label>
                              </div>
                              
                        </div>

                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="form-floating mb-3">
                                <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                                <label for="floatingInput">Confirm Password</label>
                              </div>
                              
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="form-floating mb-3">
                                <input type="email" id="email" class="form-control" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                              </div>
                              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" id="fname" class="form-control"  placeholder="First Name">
                                <label for="floatingInput">First Name</label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" id="mname" class="form-control"  placeholder="Middle Name">
                                <label for="floatingInput">Middle Name</label>
                              </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="lname" class="form-control"  placeholder="Last Name">
                                <label for="floatingInput">Last Name</label>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" id="contact_no" class="form-control"  placeholder="Contact Number">
                                    <label for="floatingInput">Contact Number</label>
                                  </div>
                                  
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-select form-select-lg mb-3" id="sex" aria-label=".form-select-lg example">
                                    <option selected>Male</option>
                                    <option value="1">Female</option>
                                 
                                  </select>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <select class="form-select form-select-lg mb-3" id="province" aria-label=".form-select-lg example">
                                <option selected>Province</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select class="form-select form-select-lg mb-3" id="city" aria-label=".form-select-lg example">
                                <option selected>City</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select class="form-select form-select-lg mb-3" id="barangay" aria-label=".form-select-lg example">
                                <option selected>Barangay</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <div class="col mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="street" class="form-control"  placeholder="street">
                                <label for="floatingInput">Street</label>
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
        
    </div>

</div>
@endsection