@extends('layouts.client')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col mb-3">
            <h2 class="text-center">ACCOUNT PANEL</h2>
            <hr>
        </div>


        <form onsubmit="event.preventDefault(); submitForm();">
            <h6 class="text-center">Personal Information</h6>
            <hr/>
        
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="fname" id="fname" value="{{ $user->fname }}"  placeholder="First Name" />
                        <label for="floatingInput">First Name</label>
                    </div>
                    <span id="error-fname" class="error-msg"></span>
                </div>
                <div class="col mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="mname" id="mname" value="{{ $user->mname }}"  placeholder="Middle Name">
                        <label for="floatingInput">Middle Name</label>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="lname" id="lname" value="{{ $user->lname }}"  placeholder="Last Name">
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <span id="error-lname" class="error-msg"></span>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="suffix" id="suffix" value="{{ $user->suffix }}"  placeholder="Last Name">
                        <label for="floatingInput">Suffix</label>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="form-floating">
                        <select class="form-select" name="sex" id="sex">
                            @if($user->sex == 'MALE')
                                <option selected value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            @else
                                <option value="MALE">MALE</option>
                                <option selected value="FEMALE">FEMALE</option>
                            @endif
                        </select>
                        <label for="sex">Sex</label>
                    </div>
                </div>
            </div>

            <h6 class="text-center">Contact Information</h6>
            <hr>

            <div class="row">
                <div class="col  mb-3">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="email here">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <span id="error-email" class="error-msg"></span>
                </div>
                <div class="col mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="contact_no" id="contact_no" value="{{ $user->contact_no }}"  placeholder="Contact Number">
                        <label for="floatingInput">Contact Number</label>
                    </div>
                </div>
            </div>

            <h6 class="text-center">Address Information</h6>
            <hr>

            <div class="row">
                <div class="col-lg mb-3">
                    <div class="form-floating">
                        <select class="form-select" onchange="loadCity(this.value)" id="province">

                        </select>
                        <label for="province">Province</label>
                    </div>
                    <span id="error-province" class="error-msg"></span>
                </div>
                <div class="col-lg  mb-3">
                    <div class="form-floating">
                        <select class="form-select" onchange="loadBarangay(this.value)" id="city">

                        </select>
                        <label for="city">City</label>
                    </div>
                    <span id="error-city" class="error-msg"></span>
                </div>
            </div>


            <div class="row">
                <div class="col-lg mb-3">
                    <div class="form-floating">
                        <select class="form-select" id="barangay">
                        
                        </select>
                        <label for="barangay">Barangay</label>
                    </div>
                    <span id="error-barangay" class="error-msg"></span>
                </div>
                <div class="col-lg mb-2">
                    <div class="form-floating">
                        <input type="text" id="street" name="street" value="{{ $user->street }}" class="form-control"  placeholder="street">
                        <label for="floatingInput">Street</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>

</div>











    <script>

        let defaultProvCode = '{{ $user->province }}';
        loadProvince();


        function loadProvince(){

            axios.get('/address/provinces').then(res=>{
                let provinces = res.data;
                let province = document.getElementById("province");
                let str = '';
                for (var item of provinces) {
                    str += "<option value="+item.provCode+">" + item.provDesc + "</option>"
                }
                province.innerHTML = str;
                province.value = defaultProvCode;
                loadCity(province.value);
            })

        }

        function loadCity(provcode){
            axios.get('/address/cities/'+provcode).then(res=>{
                let cities = res.data;
                let city = document.getElementById("city");
                let str = '';
                for (let item of cities) {
                    str += "<option value="+item.citymunCode+">" + item.citymunDesc + "</option>"
                }
                city.innerHTML = str;
                city.value = {{ $user->city }};

                loadBarangay(city.value);
            })
        }



        function loadBarangay(citycode){
            if(citycode){
                axios.get('/address/barangays/'+citycode).then(res=>{
                    let barangays = res.data;
                    let barangay = document.getElementById("barangay");
                    let str = '';
                    for (let item of barangays) {
                        str += "<option value="+item.brgyCode+">" + item.brgyDesc + "</option>"
                    }
                    barangay.innerHTML = str;
                })
            }
        }

        function submitForm(){

           
            let email = document.getElementById('email');
            let lname = document.getElementById('lname');
            let fname = document.getElementById('fname');
            let mname = document.getElementById('mname');
            let sex = document.getElementById('sex');
            let contact_no = document.getElementById('contact_no');
            let province = document.getElementById('province');
            let city = document.getElementById('city');
            let barangay = document.getElementById('barangay');
            let street = document.getElementById('street');


            var fields = {
               
                email: email.value,
                lname: lname.value,
                fname: fname.value,
                mname: mname.value,
                sex: sex.value,
                contact_no: contact_no.value,
                province: province.value,
                city: city.value,
                barangay: barangay.value,
                street: street.value,
            };
            //
            // console.log(fields);

            axios.post('/client-account-panel', fields).then(res=>{
                if(res.status === 201){
                    alert('Data successfully updated.');
                    window.location = '/client-account-panel';
                }
            });
        }
    </script>



@endsection
