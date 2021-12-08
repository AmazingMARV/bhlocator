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
    
   public function store(Request $id){
    $user = Auth::user();
    Comment::create([
        'comment_id' => $id,
        'bhouse_id' => $req->bhouse_id,
        'user_id' => $req->user_id,
        'rating' => $req->rating,
        'comment' =>$req->comment,

    ]);

    return response()->json([
        'status' => 'success'
    ],200);

   }
}
