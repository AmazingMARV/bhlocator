@extends('layouts.owner')
@section('content')
<div class="login-container">
    <div class="login-panel effect1">
        <form id="form-submit">
            <h2>Change Password</h2>
            <hr>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="old_password" placeholder="Old Password">
                <label for="floatingPassword">Old Password</label>
                <span id="error-password" class="error-msg"></span>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="new_password" placeholder=" New Password">
                <label for="floatingPassword">New Password</label>
                <span id="error-password" class="error-msg"></span>

            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="retype_password" placeholder="Password">
                <label for="floatingPassword">Re-type New Password</label>
                <span id="error-password" class="error-msg"></span>

            </div>

            <button type="button" id="btn-update" class="btn btn-primary">Save</button>
        </form>

    </div>
 </div>

    <script>
        document.getElementById('btn-update').addEventListener('click',function(){
            let old_password = document.getElementById('old_password');
            let new_password = document.getElementById('new_password');
            let retype_password = document.getElementById('retype_password');

            if(new_password.value !== retype_password.value){
                alert('Password not matched.');
                return;
            }

            axios.post('/owner-change-password', {
                old_password: old_password.value,
                new_password: new_password.value,
                retype_password: retype_password.value
            }).then(res=>{
               if(res.status === 201){
                   alert('Password successfully changed');
                   window.location = '/owner-change-password';
               }
            }).catch(err=>{
                if(err.response.status === 406){
                    alert('Changing password error.');
                }
            });
        });
    </script>
@endsection