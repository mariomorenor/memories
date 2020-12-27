<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    return redirect()->route("home");
});

Auth::routes(["register"=>false]);

Route::middleware(["auth"])->group(function(){
    // HOME
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    // USER

    Route::get("user/profile",[UserController::class,"edit"])->name("user.profile");

});







