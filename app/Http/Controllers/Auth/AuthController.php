<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('area_atleta.login');
    }

    public function login(Request $request){
        $credencials = $request->only('email', 'password');
        if(Auth::attempt($credencials)){
            return redirect()->intended('/area_atleta.area_restrita');
        }
        return back()->withErrors(['email'=>'Credenciais inválidas.']);
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }    
}
