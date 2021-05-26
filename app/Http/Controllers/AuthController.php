<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check() === true){
            return view('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
        
    }

    public function showlogin()
    {
        return view('admin.formLogin');
    }
}
