<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bhouse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ClientHomeController extends Controller
{
    //
    public function index(){
        $bhouses = Bhouse::paginate(6);
       
        return view('client.client-home')
            ->with('bhouses', $bhouses);
        
    }
    
    
    
}
