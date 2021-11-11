<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;
class BoardinghouseViewBedController extends Controller
{
    //
    public function index(){
        return view('owner.bhouse-view-bed');
        
    }
    
    public function getBeds(Request $req){
      

        $data = Bedroom::all();
        return $data;
         
    }
}
