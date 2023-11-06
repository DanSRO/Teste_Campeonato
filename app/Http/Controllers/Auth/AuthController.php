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
        
        // Tente encontrar o usuário pelo email
        // $user = User::where('email', $credentials['email'])->first();
        // if ($user && Hash::check($credentials['password'], $user->password)) {
        //     Auth::login($user);
        
        $credentials = $request->only('email', 'password');
        // \Log::info('Tentativa de login', ['credenciais' => $credentials]);
        // dd($credentials);
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // dd('teste');
            // return redirect('/area_atleta/area_restrita');
            return redirect()->intended('/area_atleta/area_restrita');
        }

    return back()->withErrors(['login_error' => 'Credenciais inválidas.']);

    // $credentials = $request->only('email', 'password');
    // $user = User::where('email', $credencials['email'])->first();

    // if ($user && Hash::check($credentials['password'], $user->password)) {
    //     Auth::login($user);
    //     return redirect()->intended('/area_atleta.area_restrita');
    // }

    // return back()->withErrors(['email'=>'Credenciais inválidas.']);
    // }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }    
}
