<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ClientChangePasswordController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    //
    public function index(){
        return view('client.client-change-password');
    }

    public function changePasword(Request $req){

        $user = Auth::user();
        $hashedPassword = $user->password;
        $id = $user->user_id;

        if (Hash::check($req->old_password, $hashedPassword)) {
            // The passwords match...
            $data = User::find($id);
            $data->password = Hash::make($req->new_password);
            $data->save();

            return response()->json([
                'status' => 'password changed'
            ],201);
        }

        return response()->json([
            'status' => 'password error'
        ],406);
    }
}
