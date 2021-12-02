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

    public function index(Request $req){
      

        $bhouses = Bhouse::where('user_id', $req->id)->get();
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

    public function edit($id){
        $bhouses = Bhouse::find($id);
        return view ('owner.bhouse-edit-bhouse')
        ->with('bhouse',$bhouses);
      
    }

    public function update(Request $req, $bhouse_id){

        //return $req;
        
        $bhouseImg = $req->file('bhouse_img');
        $n = null;
        if($bhouseImg){
            $pathFile = $bhouseImg->store('public/bhouses'); //get path of the file
            $n = explode('/', $pathFile); //split into array using /
        }
       



        $bhouse = Bhouse::find($bhouse_id);


        $bhouse->bhouse_name =$req->bhouse_name;
        $bhouse->bhouse_desc = $req->bhouse_desc;
        $bhouse->bhouse_rule = $req->bhouse_rule;
        $bhouse->loc_description = $req->loc_description;
        $bhouse->loc_x = $req->loc_x;
        $bhouse->loc_y = $req->loc_y;

        $bhouse->bhouse_img = $n[2] != null ? $n[2]: '';

        $bhouse->save();

        return response()->json([
            'status' => 'updated'
        ], 200 );
    }

    public function destroy($bhouse_id){
        Bhouse::destroy($bhouse_id);

        return response()->json([
            'status' => 'deleted'
        ], 200);

    }
    
}
