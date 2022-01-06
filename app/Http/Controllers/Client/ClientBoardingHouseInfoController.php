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
       
        
    }

    public function fetchBed($id){
        
       
        $total_review = DB::table('comments')->count();
        $star_1 = DB::table('comments')->where('rating',1)->count();
        $star_2 = DB::table('comments')->where('rating',2)->count();
        $star_3 = DB::table('comments')->where('rating',3)->count();
        $star_4 = DB::table('comments')->where('rating',4)->count();
        $star_5 = DB::table('comments')->where('rating',5)->count();

        // return $total_review;
      
        
        
        $bhouses = Bhouse::where('bhouse_id', $id)->first();
        $beds = Bedroom::where('bhouse_id', $id)->paginate(2);
        $comment_review = Comment::where('bhouse_id', $id)->paginate(3);
        $comments = DB::table('users')
        ->join('comments', 'users.user_id', '=', 'comments.user_id')
        ->join('bhouses', 'bhouses.bhouse_id', 'comments.bhouse_id')
        ->where('comments.bhouse_id', $id)
        ->orderBy('comments.comment_id', 'desc')
        ->select('bhouses.bhouse_id','bhouses.user_id','bhouses.bhouse_name','bhouses.bhouse_desc',
                 'users.fname','users.lname', 
                 'bhouses.bhouse_img','bhouses.bhouse_rule','bhouses.loc_description','bhouses.loc_x',
                 'bhouses.loc_y','comments.comment_id', 'comments.bhouse_id', 'comments.user_id','comments.rating',
                 'comments.comment','comments.created_at')
        ->get();
        
        
        return view('client.client-boarding-house-info')
        ->with('bhouses', $bhouses)
        ->with('comments', $comments)
        ->with('beds', $beds)
        ->with('total_review',$total_review)
        ->with('star_1',$star_1)
        ->with('star_2',$star_2)
        ->with('star_3',$star_3)
        ->with('star_4',$star_4)
        ->with('star_5',$star_5)
        ->with('id', $id);
        
   

    }
    

   
}
