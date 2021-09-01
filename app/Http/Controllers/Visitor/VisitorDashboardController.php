<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorDashboardController extends Controller
{
    //
    public function index(){
        return view('visitor.visitor-dashboard');
        
    }

    public function index1(){
        return view('visitor.visitor-browse-bh');
    }

}
