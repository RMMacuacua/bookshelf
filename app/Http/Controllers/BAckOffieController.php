<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BAckOffieController extends Controller
{
    public function index(){
        return view('backofice.dashboard');
    }
}
