<?php

namespace App\Http\Controllers;

use App\Models\mymodel;
use Illuminate\Http\Request;

class form_controller extends Controller
{
    function register(Request $requset){
        
        $model = new mymodel();

        $model->name = $requset->name;
        $model->email = $requset->email;
        $model->password = $requset->password;

        $model->save();

        return redirect()->back()->with('success','data has been saved');
    }

    function view(){
        $userdata = mymodel::all();
        return view('data', compact('userdata'));
    }
}
