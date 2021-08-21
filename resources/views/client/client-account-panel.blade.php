@extends('layouts.client')
@section('content')


     <div class="container mt-5">
         <div class="row">
             <div class="col">
                 <h2>ACCOUNT PANEL</h2>
                 <hr>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username">
                     <label for="floatingInput">Username</label>
                 </div>
             </div>


             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="name@example.com">
                     <label for="floatingInput">Email address</label>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="fname" value="{{ $user->fname }}"  placeholder="First Name" />
                     <label for="floatingInput">First Name</label>
                 </div>
             </div>

             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="mname" value="{{ $user->mname }}"  placeholder="Middle Name">
                     <label for="floatingInput">Middle Name</label>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="lname" value="{{ $user->lname }}"  placeholder="Last Name">
                     <label for="floatingInput">Last Name</label>
                 </div>
             </div>

             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="suffix" value="{{ $user->suffix }}"  placeholder="Last Name">
                     <label for="floatingInput">Suffix</label>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="contact_no" value="{{ $user->contact_no }}"  placeholder="Contact Number">
                     <label for="floatingInput">Contact Number</label>
                 </div>

             </div>
             <div class="col-lg-6 mb-3">
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

         <div class="row">
             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <select class="form-select" onchange="loadCity(this.value)" id="province">
                     </select>
                     <label for="province">Province</label>
                 </div>
                 <span id="error-province" class="error-msg"></span>
             </div>

             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <select class="form-select" onchange="loadBarangay(this.value)" id="city">
                     </select>
                     <label for="city">City</label>
                 </div>
                 <span id="error-city" class="error-msg"></span>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-6 mb-3">
                 <div class="form-floating">
                     <select class="form-select" id="barangay">

                     </select>
                     <label for="barangay">Barangay</label>
                 </div>
             </div>

             <div class="col-lg-6 mb-2">
                 <div class="form-floating">
                     <input type="text" id="street" name="street" value="{{ $user->street }}" class="form-control"  placeholder="street">
                     <label for="floatingInput">Street</label>
                 </div>
             </div>
         </div>

         <button type="button" class="btn btn-primary">Save</button>
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
    </script>



@endsection
