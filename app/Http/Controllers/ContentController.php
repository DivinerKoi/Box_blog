<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ContentController extends Controller
{
    public function __construct() {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function content1(){
        $feed_items = []; 
        if (Auth::check()) { 
            $feed_items = Auth::user()->feed()->paginate(30); }
        return view('contents.tojava',compact('feed_items'));
    }
    public function content2(){
        return view('contents.tophp');
    }
    public function content3(){
        return view('contents.topython');
    }
}
