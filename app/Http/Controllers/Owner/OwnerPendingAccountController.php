<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class OwnerPendingAccountController extends Controller
{
    //
    public function index(){
        return view('owner.owner-pending');
        
    }

    public function disapprove(){
        return view('owner.owner-disapprove');
    }
}
