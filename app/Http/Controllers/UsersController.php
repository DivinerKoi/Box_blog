<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    //注册方法
    public function create(){
        return view('users.create');//跳转到注册页面
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }
}
