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
    
    public function content(){
        return view('contents.tojava');
    }
}
