<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Province;
use App\Models\City;
use App\Models\Barangay;

class AddressController extends Controller
{
    //

    public function provinces(){
        return Province::where('active', 1)
            ->orderBy('provDesc', 'asc')
            ->get();
    }

    public function cities($provcode){
        return City::where('provCode', $provcode)
            ->orderBy('citymunDesc', 'asc')
            ->get();
    }

    public function barangays($citycode){
        return Barangay::where('citymunCode', $citycode)
            ->orderBy('brgyDesc', 'asc')
            ->get();
    }

}
