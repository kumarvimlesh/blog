<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::User()){
        $posts=Post::all();
        return view('home',compact('posts'));
    }
    else{
        return view('welcome');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('test',function(){
    return "Test Route";
});

Route::get('post/{slug}',function($slug){
    $post=Post::where('slug','=',$slug)->firstOrFail();
    return view('post',compact('post'));
});
