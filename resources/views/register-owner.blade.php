@extends('layouts.app')

@section('content')
<div class="register-container">
    <div class="container">
        <div class="">

        </div>
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
                                    <input type="password" id="password" class="form-control" placeholder="Confirm Password">
                                    <label for="floatingInput"> Password</label>
                                  </div>
                                  <span id="error-password" class="error-msg"></span>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="form-floating">
                                    <input type="password" id="password_confirmation" class="form-control" placeholder="Password">
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
                            <div class="col-lg-6 mb-2">
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

                        <div class="mb-3">
                            <label for="business_permit_img" class="form-label">Upload photo of your Business Permit</label>
                            <input class="form-control" type="file" id="business_permit_img" name="business_permit_img">
                            <span class="error-msg" id="error-business_permit_img"></span>

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
                                    <select class="form-select" id="province"  onchange="loadCity(this)">
                                    </select>
                                    <label for="province">Province</label>
                                </div>
                                <span id="error-province" class="error-msg"></span>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="form-floating">
                                    <select class="form-select" id="city" onchange="loadBarangay(this)">
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
                                    </select>
                                    <label for="province">Barangay</label>
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
        let password_confirmation = document.getElementById('password_confirmation');
        let lname = document.getElementById('lname');
        let fname = document.getElementById('fname');
        let mname = document.getElementById('mname');
        let suffix = document.getElementById('suffix');
        let sex = document.getElementById('sex');
        let contact_no = document.getElementById('contact_no');
        let email = document.getElementById('email');
        let province = document.getElementById('province');
        let city = document.getElementById('city');
        let barangay = document.getElementById('barangay');
        let street = document.getElementById('street');
        let business_permit_img = document.getElementById('business_permit_img');

        let error = document.getElementById('error');


        function clearDataForms(){
            document.getElementById('error-username').innerText = "";
            document.getElementById('error-password').innerText = "";
            document.getElementById('error-fname').innerText = "";
            document.getElementById('error-lname').innerText = "";
            document.getElementById('error-email').innerText = "";
            document.getElementById('error-business_permit_img').innerText = "";
            document.getElementById('error-province').innerText = "";
            document.getElementById('error-city').innerText = "";
            document.getElementById('error-barangay').innerText = "";
            
        }


            document.getElementById('form-submit').addEventListener('submit', function(e) {
                e.preventDefault();

                clearDataForms();

        var formData = new FormData();

            formData.append('username', username.value);
            formData.append('password', password.value);
            formData.append('password_confirmation', password_confirmation.value);
            formData.append('lname', lname.value);
            formData.append('fname', fname.value);
            formData.append('mname', mname.value);
            formData.append('suffix', suffix.value);
            formData.append('sex', sex.value);
            formData.append('contact_no', contact_no.value);
            formData.append('email', email.value);
            formData.append('province', province.value);
            formData.append('city', city.value);
            formData.append('barangay', barangay.value);
            formData.append('street', street.value);
            formData.append('business_permit_img', business_permit_img.files[0]);
            

        

            axios.post('/register-owner', formData).then(res=>{
                if(res.data.remark === 'success'){
                    alert('Account successfully saved.');
                    window.location = '/login';
                }
            }).catch(err => {
                if(err.response.status === 422){
                    error.style.color = 'red';
                    let errors = err.response.data.errors
                  
                    if(errors.username){
                        document.getElementById('error-username').innerText = errors.username[0];
                    }

                    if(errors.password){
                        document.getElementById('error-password').innerText = errors.password[0];
                    }

                    if(errors.lname){
                        document.getElementById('error-lname').innerText = errors.lname[0];
                    }
                    
                    if(errors.fname){
                        document.getElementById('error-fname').innerText = errors.fname[0];
                    }
                    if(errors.email){
                        document.getElementById('error-email').innerText = errors.email[0];
                    }

                    if(errors.business_permit_img){
                        document.getElementById('error-business_permit_img').innerText = errors.business_permit_img[0]; 
                    }

                    if(errors.province){
                        document.getElementById('error-province').innerText = errors.province[0];
                    }

                    if(errors.city){
                        document.getElementById('error-city').innerText = errors.city[0];
                    }
                    
                    if(errors.barangay){
                        document.getElementById('error-barangay').innerText = errors.barangay[0];
                    }
                  
                 
                       
                        
                        
                       
                        

                }
            });
        });


        loadProovince();

        function loadProovince(){
            axios.get('/address/provinces').then(res=>{
                let provinces = res.data;
                let province = document.getElementById("province");
                let str = '';
                for (var item of provinces) {
                    str += "<option value="+item.provCode+">" + item.provDesc + "</option>"
                }
               province.innerHTML = str;


                //loadCity(province.value);
            })
            
        }

        function loadCity(provcode){
            axios.get('/address/cities/'+provcode.value).then(res=>{
                let cities = res.data;
                let city = document.getElementById("city");
                let str = '';
                for (let item of cities) {
                    str += "<option value="+item.citymunCode+">" + item.citymunDesc + "</option>"
                }
                city.innerHTML = str;
            })
            
        }

        function loadBarangay(citycode){
            axios.get('/address/barangays/'+citycode.value).then(res=>{
                let barangays = res.data;
                let barangay = document.getElementById("barangay");
                let str = '';
                for (let item of barangays) {
                    str += "<option value="+item.brgyCode+">" + item.brgyDesc + "</option>"
                }
                barangay.innerHTML = str;
            })
            
        }


    </script>

@endsection
