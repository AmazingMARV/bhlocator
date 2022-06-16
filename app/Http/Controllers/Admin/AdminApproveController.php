<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminApproveController extends Controller
{
    //
    public function index(){
        return view('admin.admin-approve');
        
    }

    public function getUsers(Request $req){
        $data = User::where('is_approve', '0')
        ->where('role', 'OWNER')
        ->get();
        return $data;
    }

    public function getImg($id){
        $data =User::find($id);
        return $data;
 
    }

    public function approveAccountOwner($id){
        $data = User::find($id);
        $data->is_approve = '1';
        $data->is_pending = '0';
        $data->save();
        return response()->json([
            'status'=> 'updated'
        ],200);
    }

    public function disapproveAccountOwner($id){
        $data = User::find($id);
        $data->is_pending = 1;
        $data->is_approve = 2;
        $data->save();
        return response()->json([
            'status'=> 'updated'
        ],200);
    }
}
