<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Bhouse;
use Illuminate\Http\Request;

class DashboardBhouseController extends Controller
{
    //
    public function index(){
        $bhouses = Bhouse::all();
        return view('owner.dashsboard')
            ->with('bhouses', $bhouses);

    }

    public function index1(){
        return view('owner.bhouse-create');
    }

    public function index2(){
        return view('owner.bhouse-create-bed');
    }

}
