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
    
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $bhouse = Bhouse::query()
            ->where('bhouse_name', 'LIKE', "%{$search}%")
            
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }
    
}
