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
            'username' => ['string', 'max:50', 'required', 'unique:users'],
            'password' => ['required', 'min:4', 'confirmed'],
            'lname' => ['string', 'max:100', 'required'],
            'fname' => ['string', 'max:100', 'required'],
            'sex' => ['string', 'max:15', 'required'],
            'email' => ['string', 'max:70', 'required', 'unique:users'],
            'contact_no' => ['string', 'max:15', 'required'],
            'province' => ['string', 'max:255', 'required'],
            'business_permit' => ['string', 'max:255', 'required'],
            'city' => ['string', 'max:255', 'required'],
            'barangay' => ['string', 'max:255', 'required'],
        ], $message = [
            'lname.required' => 'Lastname is required.',
            'fname.required' => 'Firstname is required.',
        ]);

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
            'business_permit' => $req->business_permit,
            'province' => $req->province,
            'city' => $req->city,
            'barangay' => $req->barangay,
            'street' => $req->street,
            'role' => 'OWNER',
        ]);

        return response()->json([
            'remark' => 'success'
        ], 201);
    }
}
