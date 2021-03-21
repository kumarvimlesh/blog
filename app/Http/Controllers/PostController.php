<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    //
    public static function getuser($auther_id){
        $user=User::where('id','=',0);
        return $user;
    }
}
