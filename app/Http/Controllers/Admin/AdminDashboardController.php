<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    //

    public function index(){
        return view('admin.admin-dashboard');
        
    }

    public function getUsers(Request $req){
      
        // $key  = $req->search['value'];

        // $data = User::where('lname','like',$key."%")
        // ->where('role','CLIENT')
        // ->get();

        $data = User::all();

       // return ["data"=>json_decode($data)];
       return $data;
         
    }

    public function edit($id){
        $user = User::find($id);
        return view ('admin.admin-edit')
        ->with('user',$user);
      
    }

    public function update(Request $req, $user_id){
       
        $user = User::find($user_id);


        $user->lname = strtoupper($req->lname);
        $user->fname = strtoupper($req->fname);
        $user->mname = strtoupper($req->mname);
        $user->sex = strtoupper($req->sex);
        $user->contact_no = strtoupper($req->contact_no);
        $user->province = strtoupper($req->province);
        $user->city = strtoupper($req->city);
        $user->barangay = strtoupper($req->barangay);
        $user->street = strtoupper($req->street);
        $user->save();

        return response()->json([
            'status' => 'updated'
        ], 201);
    }

    public function destroy($user_id){
        User::destroy($user_id);

        return response()->json([
            'status' => 'deleted'
        ], 200);

    }
}
