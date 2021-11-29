<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Models\Bhouse;
use Auth;
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

    public function store(Request $req ,$id){
        //create([])
        //return $req;

        $req->validate([
            'bedroom_name' => ['required'],
            'price' => ['numeric'],
            'is_available' => ['required'],
            'bed_img' => ['mimes:jpg,png', 'max: 300'],
            'bed_amenities' => ['required'],

        ], $message=[
            'bedroom_name.required' => 'This field is required',
            'price.required' => 'This field is required',
            'is_available.required' => 'This field is required',
            'bed_img.mimes' => 'Image is not a valid format',
            'bed_img.max' => 'Image not greater than 300kb.',
            'bed_amenities' => 'This field is required',

        ]);


        $bedImg = $req->file('bed_img');
        $pathFile = $bedImg->store('public/beds'); //get path of the file
        $n = explode('/', $pathFile); //split into array using /

        $user = Auth::user();
        Bedroom::create([
            'bedroom_name' => $req->bedroom_name,
            'bhouse_id' => $id,
            'price' => $req->price,
            'is_available' => $req->is_available,
            'bed_img' => $n[2], //get the 3rd array which is the filename
            'bed_amenities' =>$req->bed_amenities,

        ]);

        return response()->json([
            'status' => 'success'
        ],200);
    }



    public function edit($id){
        $bedroom = Bedroom::find($id);
        return view ('owner.bhouse-edit-bed')
            ->with('bedroom',$bedroom);
    }

    public function update(Request $req, $bedroom){

        //return $req;
        
        $bedImg = $req->file('bed_img');
        $n = null;
        if($bedImg){
            $pathFile = $bedImg->store('public/beds'); //get path of the file
            $n = explode('/', $pathFile); //split into array using /
        }
       



        $bedrooms = Bedroom::find($bedroom);


        $bedrooms->bedroom_name =$req->bedroom_name;
        $bedrooms->price = $req->price;
        $bedrooms->is_available = $req->is_available;
        $bedrooms->bed_amenities = $req->bed_amenities;

        $bedrooms->bed_img = $n[2] != null ? $n[2]: '';

        $bedrooms->save();

        return response()->json([
            'status' => 'updated'
        ], 200 );
    }


}
