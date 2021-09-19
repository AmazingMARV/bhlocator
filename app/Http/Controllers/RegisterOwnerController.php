<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterOwnerController extends Controller
{
    //

    public function index(){
        return view('register-owner');
    }

    public function store(Request $req){
    

        $req->validate([
            'username' => ['string', 'max:100', 'required', 'unique:users'],
            'password' => ['required', 'min:4', 'confirmed'],
            'lname' => ['string', 'max:100', 'required'],
            'fname' => ['string', 'max:100', 'required'],
            'sex' => ['string', 'max:15', 'required'],
            'email' => ['string', 'max:70', 'required', 'unique:users'],
            'contact_no' => ['string', 'max:15', 'required'],
            'province' => ['string', 'max:255', 'required'],
            'city' => ['string', 'max:255', 'required'],
            'barangay' => ['string', 'max:255', 'required'],
            'business_permit_img' => ['mimes:jpg,png', 'max: 300']
        ], $message = [
            'username.required' => 'This field is required.',
            'username.string' => 'Invalid format of username.',
            'lname.required' => 'This field is required.',
            'lname.string' => 'Invalid format of Last Name.',
            'fname.required' => 'This field is required.',
            'fname.string' => 'Invalid format of First Name.',
            'email.required' => 'This field is required.',
            'email.string' => 'Invalid format of Email.',
            'business_permit_img.mimes' => 'Image is not a valid format',
            'business_permit_img.max' => 'Image not greater than 300kb.',
            'barangay.string' => "Invalid format of barangay name.",
        ]);

        $bPermitImg = $req->file('business_permit_img');
        $pathFile = $bPermitImg->store('public/bpermit'); //get path of the file
        $n = explode('/', $pathFile); //split into array using /


        

        User::create([
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'lname' => strtoupper($req->lname),
            'fname' => strtoupper($req->fname),
            'mname' => strtoupper($req->mname),
            'suffix' => strtoupper($req->suffix),
            'sex' => strtoupper($req->sex),
            'contact_no' => $req->contact_no,
            'email' => $req->email,
            'business_permit_img' => $n[2], //get the 3rd array which is the filename
            'province' => $req->province,
            'city' => $req->city,
            'barangay' => $req->barangay,
            'street' => $req->street,
            'role' => 'OWNER',
            'is_approve' => '0'

        ]);

        return response()->json([
            'remark' => 'success'
        ], 201);
    }
}
