@extends('layouts.owner')
@section('content')
    <div class="container mt-5">
       
        <div class="row">
            <div class="col-lg-6 offset-3">
            <h2 class="text-center">Account Panel</h2>
            <hr class="mb-3">

                <form action="">
                    <h2 class="text-center">My Personal Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="fname" id="fname" value="{{ $user->fname }}"  placeholder="First Name" />
                                <label for="floatingInput">First Name</label>
                            </div>
                            <span id="error-fname" class="error-msg"></span>
                        </div>
                    
        
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="mname" id="mname" value="{{ $user->mname }}"  placeholder="Middle Name">
                                <label for="floatingInput">Middle Name</label>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="lname" id="lname" value="{{ $user->lname }}"  placeholder="Last Name">
                                <label for="floatingInput">Last Name</label>
                            </div>
                            <span id="error-lname" class="error-msg"></span>
                        </div>
            
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="suffix" id="suffix" value="{{ $user->suffix }}"  placeholder="Last Name">
                                <label for="floatingInput">Suffix</label>
                            </div>
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
        
                    <h2 class="text-center">My Business Profile and Contact Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="email here...">
                                <label for="floatingInput">Email address</label>
                            </div>
                                <span id="error-email" class="error-msg"></span>
                        </div>
        
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="contact_no" id="contact_no" value="{{ $user->contact_no }}"  placeholder="Contact Number">
                                <label for="floatingInput">Contact Number</label>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-center">Business Permit Image</h2>
        
                    <div class="text-center">
                         <img src="{{ asset('storage/bpermit/' . $user->business_permit_img)  }}" class="rounded" alt="..." width="250px" height="250px">
                     </div>
        
                    <div class="row">
                              <div class="mb-3">
                                    <label for="business_permit_img" class="form-label">Upload photo of your Business Permit</label>
                                    <input class="form-control" type="file" id="business_permit_img" name="business_permit_img"  value="{{ $user->business_permit_img }}">
                                    <span class="error-msg" id="error-business_permit_img"></span>
        
                                </div>
                        
                        
                    </div>
        
                    
        
                    <h2 class="text-center">My Address Information</h2>
                    <hr>
        
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
                            <span id="error-barangay" class="error-msg"></span>
                        </div>
        
                        <div class="col-lg-6 mb-2">
                            <div class="form-floating">
                                <input type="text" id="street" name="street" value="{{ $user->street }}" class="form-control"  placeholder="street">
                                <label for="floatingInput">Street</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="submitForm()" class="btn btn-primary"> Save </button>
                </form>
            </div>

        </div>
    </div>
    
<script>

let defaultProvCode = '{{ $user->province }}';
let defaultCityCode = '{{ $user->city }}';
let defaultBarangayCode = '{{ $user->barangay }}';


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
            if(defaultCityCode == item.citymunCode ){
                        str += "<option selected value="+item.citymunCode+">" + item.citymunDesc + "</option>"

                    }else{
                        str += "<option value="+item.citymunCode+">" + item.citymunDesc + "</option>"

                    }
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
                if( defaultBarangayCode == item.brgyCode){
                            str += "<option selected value="+item.brgyCode+">" + item.brgyDesc + "</option>"

                        }else{
                            str += "<option value="+item.brgyCode+">" + item.brgyDesc + "</option>"

                        }
            }
            barangay.innerHTML = str;
        })
    }
}

    var email = document.getElementById('email');
    var lname = document.getElementById('lname');
    var fname = document.getElementById('fname');
    var mname = document.getElementById('mname');
    var sex = document.getElementById('sex');
    var business_permit_img = document.getElementById('business_permit_img');
    var contact_no = document.getElementById('contact_no');
    var province = document.getElementById('province');
    var city = document.getElementById('city');
    var barangay = document.getElementById('barangay');
    var street = document.getElementById('street');


function submitForm(){
    
    console.log(business_permit_img.files[0]);
   
    
    var frmData = new FormData();   

            frmData.append('email', email.value);
            frmData.append('lname', lname.value);
            frmData.append('fname', fname.value);
            frmData.append('mname', mname.value);
            frmData.append('sex', sex.value);
            frmData.append('contact_no', contact_no.value);
            frmData.append('province', province.value);
            frmData.append('city', city.value);
            frmData.append('barangay', barangay.value);
            frmData.append('street', street.value);
            frmData.append('business_permit_img', business_permit_img.files[0]);
            
    

    axios.post('/owner-profile', frmData).then(res=>{
        if(res.status === 201){
            alert('Data successfully updated.');
          //  window.location = '/owner-profile';
        }
    });
}
</script>
    
@endsection