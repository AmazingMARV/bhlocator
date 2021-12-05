<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Models\Bhouse;
use Auth;

class ClientBoardingHouseInfoController extends Controller
{
    //
    public function index($id){
        return view('client.client-boarding-house-info')
        ->with('id', $id);
        
    }
}
