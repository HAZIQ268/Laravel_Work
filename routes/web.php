<?php

use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('xyz', function(){
    return view('form');
});

// Route::get('user', [user_controller::class,'myfunction']);
