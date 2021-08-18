@extends('layouts.app')

@section('content')
    <div class="register-container">
        <div class="container">
            <div class="">

            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <form id="form-submit">
                        <div class="container">
                            <div class="row p-2">
                                <div class="col">
                                    <h2>REGISTRATION FOR CLIENT</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="username" class="form-control"  placeholder="Username">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <span id="error-username" class="error-msg"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="password" id="password" class="form-control" placeholder="Password">
                                        <label for="floatingInput">Password</label>
                                    </div>
                                    <span id="error-password" class="error-msg"></span>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                                        <label for="floatingInput">Confirm Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="fname" class="form-control"  placeholder="First Name">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                    <span id="error-fname" class="error-msg"></span>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="mname" class="form-control"  placeholder="Middle Name">
                                        <label for="floatingInput">Middle Name</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="lname" class="form-control"  placeholder="Last Name">
                                        <label for="floatingInput">Last Name</label>
                                    </div>
                                    <span id="error-lname" class="error-msg"></span>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="suffix" class="form-control"  placeholder="Suffix">
                                        <label for="floatingInput">Suffix</label>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-4 mb-2">
                                    <div class="form-floating">
                                        <input type="email" id="email" class="form-control" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <span id="error-email" class="error-msg"></span>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="contact_no" class="form-control"  placeholder="Contact Number">
                                        <label for="contact_no">Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="sex">
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </select>
                                        <label for="sex">Sex</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <select class="form-select" id="province">
                                          
                                            <option value="LANAO DEL NORTE">LANAO DEL NORTE</option>
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
                                           
                                            <option value="1">CALABAYAN</option>
                                            <option value="2">MALORO</option>
                                            <option value="3">AQUINO</option>
                                            <option value="3">POBLACION</option>
                                        </select>
                                        <label for="barangay">Barangay</label>
                                    </div>
                                    <span id="error-barangay" class="error-msg"></span>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" id="street" class="form-control"  placeholder="street">
                                        <label for="floatingInput">Street</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-4">
                                    <span id="error"></span>
                                </div>
                            </div>
                        </div> <!--container -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>

        let username = document.getElementById('username');
        let password = document.getElementById('password');
        let lname = document.getElementById('lname');
        let fname = document.getElementById('fname');
        let mname = document.getElementById('mname');
        let sex = document.getElementById('sex');
        let contact_no = document.getElementById('contact_no');
        let email = document.getElementById('email');
        let province = document.getElementById('province');
        let city = document.getElementById('city');
        let barangay = document.getElementById('barangay');
        let street = document.getElementById('street');
        let suffix = document.getElementById('suffix');

        let error = document.getElementById('error');


        document.getElementById('form-submit').addEventListener('submit', function(e) {
            e.preventDefault();

            axios.post('/register-client', {
                username: username.value,
                password: password.value,
                password_confirmation: password_confirmation.value,
                lname: lname.value,
                fname: fname.value,
                mname: mname.value,
                suffix: suffix.value,
                sex: sex.value,
                contact_no: contact_no.value,
                email: email.value,
                province: province.options[province.selectedIndex].value,
                city: city.value,
                barangay: barangay.value,
                street: street.value,
            }).then(res=>{
                console.log(res.data);
                if(res.data.remark === 'success'){
                    alert('Account successfully saved.');
                    window.location = '/login';
                }
            }).catch(err => {
                if(err.response.status === 422){
                    error.style.color = 'red';
                    let errors = err.response.data.errors

                    console.log(errors.password[0]);
                    if(errors.password){
                        document.getElementById('error-password').innerText = errors.password[0];
                        document.getElementById('error-username').innerText = errors.username[0];
                        document.getElementById('error-lname').innerText = errors.lname[0];
                        document.getElementById('error-fname').innerText = errors.fname[0];
                        document.getElementById('error-email').innerText = errors.email[0];
                        document.getElementById('error-province').innerText = errors.province[0];
                        document.getElementById('error-city').innerText = errors.city[0];
                        document.getElementById('error-barangay').innerText = errors.barangay[0];

                    }
                }
            });
        });



    </script>
@endsection
