<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Bhouse;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $bhouses = Bhouse::all();
        return view('owner.dashboard')
            ->with('bhouses', $bhouses);
    }


    public function create(){
        return view('owner.dashboard-create');
    }

    public function store(Request $req){
        
        
        $bhouses->bhouse_name = $req->bhouse_name;
        $bhouses->bhouse_desc = ($req->bhouse_desc);
        $bhouses->bhouse_img = ($req->bhouse_img);
        $bhouses->bhouse_rule = ($req->bhouse_rule);
        $bhouses->loc_description = strtoupper($req->loc_description);
        $bhouses->loc_x = strtoupper($req->loc_x);
        $bhouses->loc_y = strtoupper($req->loc_y);
        
        $bhouses->save();
    }
}
