<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_details;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    public function reguser()
    {
        return view('auth.registeruser');
    }

    public function storeuser(Request $request)
    {
        $user =  User::create([
            'name' => $request->uname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('cliente');
        $det = new user_details();
        $det->fullname = $request->fname;
        $det->adress = $request->adress;
        $det->contacts = $request->contact;
        $det->paymentm ="teste";
        $det->user_id = $user->id; 
        $det->save();
    }

    public function entrar(Request $request)
    {
        if(auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            $loja = new shopController();
            return $loja->home();
        }else{
            return redirect()->back()->withInput()->withErros(['os dados estão errados']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loja.home');
    }
    
}
