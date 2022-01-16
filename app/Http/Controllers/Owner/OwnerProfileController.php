<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class OwnerProfileController extends Controller
{
    //
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){    
        

        $id = Auth::user()->user_id;
        $user = DB::table('users as a')
            ->leftJoin('provinces as b', 'a.province', 'b.provCode')
            ->leftJoin('cities as c', 'a.city', 'c.citymunCode')
            ->leftJoin('barangays as d', 'a.barangay', 'd.brgyCode')
            ->where('user_id', $id)
            ->first();

            

        return view('owner.owner-profile')
            ->with('user', $user);
            
    }

    public function update(Request $req){
       

        $bPermitImg = $req->file('business_permit_img');
        $n = null;

        $bPermitImg = $req->file('business_permit_img');
        $n = null;
        if($bPermitImg){
            $pathFile = $bPermitImg->store('public/bpermit'); //get path of the file
            $n = explode('/', $pathFile); //split into array using /
        }

        $userid = Auth::user()->user_id;
        $user = User::find($userid);
        
       
        $user->lname = strtoupper($req->lname);
        $user->fname = strtoupper($req->fname);
        $user->mname = strtoupper($req->mname);
        $user->sex = strtoupper($req->sex);
        $user->contact_no = $req->contact_no;
        $user->province = $req->province;
        $user->city = $req->city;
        $user->business_permit_img = $n[2] != null ? $n[2]: '';
        $user->barangay = $req->barangay;
        $user->street = strtoupper($req->street);
        $user->save();

        return response()->json([
            'status' => 'updated'
        ], 201);
    }

}
