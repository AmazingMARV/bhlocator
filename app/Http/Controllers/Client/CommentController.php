<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bedroom;
use App\Models\Bhouse;
use App\Models\Comment;

use Auth;

class CommentController extends Controller
{
    
   public function store(Request $req){
    
    $user = Auth::user();
    Comment::create([
        
        'bhouse_id' => $req->bhouse_id,
        'user_id' => $user->user_id,
        'rating' => $req->rate_value,
        'comment' =>$req->comment,

    ]);

    return response()->json([
        'status' => 'success'
    ],200);

   }
}
