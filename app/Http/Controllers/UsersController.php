<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UsersController extends Controller
{

    public function __construct() {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store']
        ]);
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    //注册方法
    public function create(){
        return view('users.create');//跳转到注册页面
    }

    // public function show(User $user){
    //     return view('users.show',compact('user'));
    // }
    public function show(User $user) {
        $statuses = $user->statuses()
                  ->orderBy('created_at', 'desc')
                  ->paginate(3);
            return view('users.show', compact('user', 'statuses'));
    }

    //用户创建时的规则的方法
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        session()->flash('success', '欢迎进入BOX博客，这里将是您的世界！');
        return redirect()->route('users.show',[$user]);
    }

    public function edit(User $user){
        $this->authorize('update', $user);
        return view('users.edit',compact('user'));
    }

    public function update(User $user,Request $request){
        $this->authorize('update', $user);
        $this->validate($request,[
            'name' => 'required|max:50',
            'password' => 'required|confirmed|min:6'
        ]);

        $data = [];
        $data['name'] = $request->name;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
            }
            $user->update($data);
            // session()->flash('success', '个人资料更新成功！');
        return redirect()->route('users.show', $user);
    }
}
