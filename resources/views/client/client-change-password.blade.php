@extends('layouts.client')
@section('content')
<div class="login-container">
        <div class="login-panel effect1">
            <h2>Change Password</h2>
            <hr>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder=" New Password">
                <label for="floatingPassword"> New Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Re-type New Password</label>
            </div>
              <button type="button" class="btn btn-primary">Save</button>
        </div>
 </div>
@endsection