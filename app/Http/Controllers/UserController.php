<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('/painel/painel', compact('users'));
    }
    
    public function create(){
        return view('/painel.cadastrar');
    }

    public function store(Request $request){
        $request->validate([
            'usuario' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'senha' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->usuario,
            'email' => $request->email,
            'password' => Hash::make($request->senha),
        ]);
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function filter(Request $request)
    {        
        $search = $request->input('search');
        $status = $request->input('status');
        $de = $request->input('de');
        $ate = $request->input('ate');
        
        $filteredUsers = User::when($search, function($query) use ($search){
            $query->where('name', 'like', "%$search%");
        })->when($status, function ($query) use ($status) {
            $query->where('status', $status);
        })->when($de && $ate, function ($query) use ($de, $ate){
            $query->whereBetween('created_at', [$de, $ate]);
        })->paginate(10);        
        return view('painel.index', ['users' => $filteredUsers]);
    }
}
