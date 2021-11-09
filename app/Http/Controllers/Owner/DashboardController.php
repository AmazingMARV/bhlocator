<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Bhouse;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('approve');

    }

    public function index(){
      

        $bhouses = Bhouse::all();
        return view('owner.dashboard')
            ->with('bhouses', $bhouses);
    }


    public function create(){
        return view('owner.dashboard-create');
    }

    public function store(Request $req){
        //create([])
        //return $req;

        $req->validate([
            'bhouse_name' => ['required'],
            'bhouse_desc' => ['required'],
            'bhouse_rule' => ['required'],
            'bhouse_img' => ['mimes:jpg,png', 'max: 300'],
            'loc_x' => ['numeric'],
            'loc_y' => ['numeric']
        ], $message=[
            'bhouse_name.required' => 'This field is required',
            'bhouse_desc.required' => 'This field is required',
            'bhouse_rule.required' => 'This field is required',
            'bhouse_img.mimes' => 'Image is not a valid format',
            'bhouse_img.max' => 'Image not greater than 300kb.',
            'loc_x.numeric' => 'Location X must be a number',
            'loc_y.numeric' => 'Location Y must be a number',
        ]);

        $bhouseImg = $req->file('bhouse_img');
        $pathFile = $bhouseImg->store('public/bhouses'); //get path of the file
        $n = explode('/', $pathFile); //split into array using /

        $user = Auth::user();
        Bhouse::create([
            'user_id' => $user->user_id,
            'bhouse_name' => $req->bhouse_name,
            'bhouse_desc' => $req->bhouse_desc,
            'bhouse_img' => $n[2], //get the 3rd array which is the filename
            'bhouse_rule' =>$req->bhouse_rule,
            'loc_description' => $req->loc_description,
            'loc_x' => $req->loc_x,
            'loc_y' => $req->loc_y,
        ]);

        return response()->json([
            'status' => 'success'
        ],201);
    }
}
