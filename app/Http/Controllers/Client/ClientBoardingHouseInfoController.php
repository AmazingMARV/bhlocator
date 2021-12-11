<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Models\Bhouse;
use App\Models\User;
use App\Models\Comment;

use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class ClientBoardingHouseInfoController extends Controller
{
    //
    public function index($id){
        return view('client.client-boarding-house-info')
        ->with('id', $id);
        
        
    }

    public function fetchBed($id){
        $bhouses = Bhouse::where('bhouse_id', $id)->first();
        $beds = Bedroom::where('bhouse_id', $id)->paginate(2);
        $comments = Comment::where('bhouse_id', $id)->first();
         return view('client.client-boarding-house-info')
        ->with('bhouses', $bhouses)
        ->with('comments', $comments)
        ->with('beds', $beds); 

    }
}
