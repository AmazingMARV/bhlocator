<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Bhouse;
use Illuminate\Http\Request;

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


}
