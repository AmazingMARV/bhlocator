<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Models\Bhouse;
class BoardinghouseViewBedController extends Controller
{
    //
    public function index($id){
       
        return view('owner.bhouse-view-bed')
            ->with('id', $id);
    }
    
    public function getBeds(Request $req){
        
        $data = Bedroom::where('bhouse_id', $req->id)->get();
        return $data;
         
    }

    public function create($id){

        return view('owner.bhouse-create-bed')
            ->with('id', $id);
    }

   
}
