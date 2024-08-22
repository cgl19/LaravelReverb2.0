<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BroadCastController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('b2',[BroadCastController::class,'BroadCastNow']);