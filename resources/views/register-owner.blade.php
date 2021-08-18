@extends('layouts.app')

@section('content')
<div class="register-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-sm-12">
                <form action="/register-owner" method="post" id="form-submit">
                    <div class="container">
                        <div class="row p-2">
                            <div class="col">
                                <h2>REGISTRATION FOR OWNER</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" id="username" class="form-control"  placeholder="Username">
                                    <label for="floatingInput">Username</label>
                                </div>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                                    <label for="floatingInput">Confirm Password</label>
                                  </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="password" id="password" class="form-control" placeholder="Password">
                                    <label for="floatingInput">Password</label>
                                  </div>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" id="fname" class="form-control"  placeholder="First Name">
                                    <label for="floatingInput">First Name</label>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" id="mname" class="form-control"  placeholder="Middle Name">
                                    <label for="floatingInput">Middle Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" id="lname" class="form-control"  placeholder="Last Name">
                                    <label for="floatingInput">Last Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="email" id="email" class="form-control" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" id="contact_no" class="form-control"  placeholder="Contact Number">
                                    <label for="contact_no">Contact Number</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" id="sex">
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                    </select>
                                    <label for="sex">Sex</label>
                                </div>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" id="province">
                                        <option selected disabled>Select province</option>
                                        <option value="1">LANAO DEL NORTE</option>
                                        <option value="2">MISAMIS OCCIDENTAL</option>
                                        <option value="3">MISAMIS ORIENTAL</option>
                                    </select>
                                    <label for="province">Province</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" id="city">
                                        <option selected disabled>Select city</option>
                                        <option value="1">OZAMIS CITY</option>
                                        <option value="2">TUBOD</option>
                                        <option value="3">GINGOOG</option>
                                    </select>
                                    <label for="province">City</label>
                                </div>
                            </div>


                        </div>

                        <div class="row p-2">
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" id="barangay">
                                        <option selected disabled>Select barangay</option>
                                        <option value="1">CALABAYAN</option>
                                        <option value="2">MALORO</option>
                                        <option value="3">AQUINO</option>
                                        <option value="3">POBLACION</option>
                                    </select>
                                    <label for="province">Barangay</label>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" id="street" class="form-control"  placeholder="street">
                                    <label for="floatingInput">Street</label>
                                </div>
                            </div>
                        </div>

                        <div class="row px-2">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>


                    </div> <!--container -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
