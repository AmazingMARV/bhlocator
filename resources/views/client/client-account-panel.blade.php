@extends('layouts.client')
@section('content')

<div class="account-container">
    <div class="row">
        <form action="">   
             <div class="container">
                    <div class="row">
                        <h2>ACCOUNT PANEL</h2>
                        <hr>
                    </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <label for="floatingInput">Username</label>  
                                </div>
                            </div> 
                        

                            <div class="col mb-3">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>    
                            </div>
                        </div>

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  placeholder="First Name">
                                                <label for="floatingInput">First Name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  placeholder="Middle Name">
                                                <label for="floatingInput">Middle Name</label>
                                            </div>
                                        </div>  
                                </div>

                                    <div class="row">
                                                <div class="col-md-6 mb-3">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control"  placeholder="Last Name">
                                                            <label for="floatingInput">Last Name</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control"  placeholder="Last Name">
                                                            <label for="floatingInput">Suffix</label>
                                                        </div>
                                    </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"  placeholder="Contact Number">
                                    <label for="floatingInput">Contact Number</label>
                                  </div>
                                  
                            </div>
                            <div class="col-lg-6 mb-2">
                                     <div class="form-floating">
                                        <select class="form-select" id="sex">
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </select>
                                        <label for="sex">Sex</label>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                 <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="province">
                                            <option selected disabled>Select province</option>
                                            <option value="1">LANAO DEL NORTE</option>
                                            <option value="2">MISAMIS OCCIDENTAL</option>
                                            <option value="3">MISAMIS ORIENTAL</option>
                                        </select>
                                        <label for="province">Province</label>
                                    </div>
                                    <span id="error-province" class="error-msg"></span>
                                </div>


                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="city">
                                            <option selected disabled>Select city</option>
                                            <option value="1">OZAMIS CITY</option>
                                            <option value="2">TUBOD</option>
                                            <option value="3">GINGOOG</option>
                                        </select>
                                        <label for="city">City</label>
                                    </div>
                                    <span id="error-city" class="error-msg"></span>
                                </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="barangay">
                                            <option selected disabled>Select barangay</option>
                                            <option value="1">CALABAYAN</option>
                                            <option value="2">MALORO</option>
                                            <option value="3">AQUINO</option>
                                            <option value="3">POBLACION</option>
                                        </select>
                                        <label for="barangay">Barangay</label>
                                    </div>
                        </div>
                    

                                    <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="street" class="form-control"  placeholder="street">
                                        <label for="floatingInput">Street</label>
                                    </div>
                    </div>
                   
            </div>
                    
            <button type="button" class="btn btn-primary">Save</button>
                
        </form>
    </div>
</div>


@endsection