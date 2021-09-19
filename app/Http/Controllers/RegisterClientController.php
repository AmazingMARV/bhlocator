<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterClientController extends Controller
{
    //

    public function index(){
        return view('register-client');
    }

    public function store(Request $req){
       
        $req->validate([
            'username' => ['max:50', 'required', 'unique:users'],
            'password' => ['required', 'min:4', 'confirmed'],
            'lname' => ['max:100', 'required'],
            'fname' => ['max:100', 'required'],
            'sex' => ['string', 'max:15', 'required'],
            'email' => ['max:70', 'required', 'unique:users'],
            'contact_no' => ['max:15'],
            'province' => ['max:255', 'required'],
            'city' => ['max:255', 'required'],
            'barangay' => ['max:255', 'required'],
        ], $message = [
            'username.required' => 'This field is required.',
            'username.string' => 'Invalid format of username.',
            'lname.required' => 'This field is required.',
            'lname.string' => 'Invalid format of Last Name.',
            'fname.required' => 'This field is required.',
            'fname.string' => 'Invalid format of First Name.',
            'email.required' => 'This field is required.',
            'email.string' => 'Invalid format of Email.',
            'barangay.string' => "Invalid format of barangay name.",
        ]);

        User::create([
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'lname' => strtoupper($req->lname),
            'fname' => strtoupper($req->fname),
            'mname' => strtoupper($req->mname),
            'sex' => strtoupper($req->sex),
            'suffix' => strtoupper($req->suffix),
            'contact_no' => $req->contact_no,
            'email' => $req->email,
            'province' => $req->province,
            'city' => $req->city,
            'barangay' => $req->barangay,
            'street' => $req->street,
            'role' => 'CLIENT',
        ]);

        return response()->json([
            'remark' => 'success'
        ], 201);
    }
}
