<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\form_controller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('xyz', function(){
    return view('form');
});

Route::get('user', [user_controller::class,'myfunction']);

Route::post('submission', [form_controller::class,'register']);

