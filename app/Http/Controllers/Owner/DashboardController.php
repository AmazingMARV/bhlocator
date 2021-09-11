<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Bhouse;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
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
        
        $bhouseImg = $req->file('identification');

        $refcode = substr(md5(time() . $req->lname . $req->fname), -8);
        //save Caputer Image and ID Uploaded
        $safeName =  $req->username . '_cam_capture_' . $refcode . '.jpg';
        $path = public_path().'/storage/captured/'; //public_path = C/User/Desktop.....webfolder/public

        //$success = file_put_contents($path.$safeName, base64_decode($image));
        \File::put(storage_path(). '/app/public/captured/' . $safeName, base64_decode($capture_img));

        $safeNameID =  $req->username . '_identification_' . $refcode . '.'.$identification->extension();
        if($identification){
            \Storage::putFileAs('/public/identification', $identification, $safeNameID);
        }


        $user = Auth::user();
         Bhouse::create([
             'user_id' => $user->user_id,
            'bhouse_name' => $req->bhouse_name,
            'bhouse_desc' => $req->bhouse_desc,
            'bhouse_img' => $req->bhouse_img,
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
