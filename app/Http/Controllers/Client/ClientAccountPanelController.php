<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientAccountPanelController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $id = Auth::user()->user_id;
        $user = DB::table('users as a')
            ->join('provinces as b', 'a.province', 'b.provCode')
            ->join('cities as c', 'a.city', 'c.citymunCode')
            ->join('barangays as d', 'a.barangay', 'd.brgyCode')
            ->where('user_id', $id)
            ->first();

        return view('client.client-account-panel')
            ->with('user', $user);
    }
}
