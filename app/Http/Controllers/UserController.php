<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
 

    public static function getuser($id){
       $user=User::where('id','=',$id);
       return $user;
    }

    public static function getposts($user_id){
        
    }
}
