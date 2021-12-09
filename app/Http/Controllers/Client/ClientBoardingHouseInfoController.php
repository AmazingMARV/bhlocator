<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Models\Bhouse;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class ClientBoardingHouseInfoController extends Controller
{
    //
    public function index($id){
        return view('client.client-boarding-house-info')
        ->with('id', $id);
        
        
    }

    public function fetchBed($id){
        $bhouses = Bhouse::where('bhouse_id', $id)->first();
        $beds = Bedroom::where('bhouse_id', $id)->get();
         return view('client.client-boarding-house-info')
        ->with('bhouses', $bhouses)
        ->with('beds', $beds); 

    }
}
