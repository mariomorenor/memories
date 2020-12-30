<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route("pictures.index");
});

Auth::routes(["register"=>false]);

Route::middleware(["auth"])->group(function(){

    // HOME
    // Route::get('/home', [HomeController::class, 'index'])->name('home');


    // USER

    Route::get('user/profile/change-password',[UserController::class,'change_password'])->name("user.profile.change-password");

    Route::resource("user/profile",UserController::class)->parameters([
        "profile"=>"user"
    ])->names([
        "index" => "user.profile.index",
        "update" => "user.profile.update",
        "edit" => "user.profile.edit",
    ]);

    // PICTURE

    Route::resource('pictures',PictureController::class);
    
    // BOOK

    Route::resource('books',BookController::class);
    
});







