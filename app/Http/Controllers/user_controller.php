<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_controller extends Controller
{
    function myfunction(){
        return view('user_view');
    }
}
