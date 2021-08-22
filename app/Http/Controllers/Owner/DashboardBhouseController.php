<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardBhouseController extends Controller
{
    //
    public function index(){
        return view('owner.bhouse');
        
    }

    public function index1(){
        return view('owner.bhouse-create');
    }

    public function index2(){
        return view('owner.bhouse-create-bed');
    }
    
}
