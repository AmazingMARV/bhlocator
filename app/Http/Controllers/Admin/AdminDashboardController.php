<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    //

    public function index(){
        return view('admin.admin-dashboard');
        
    }

    public function getUsers(Request $req){
      
        //$key  = $req->search['value'];

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
}
