<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //注册方法
    public function create(){
        return view('users.create');
    }
}
