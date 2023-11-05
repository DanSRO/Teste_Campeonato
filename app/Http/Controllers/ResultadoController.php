<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function show(){
        $resultados = Resultado::all();
        return view('resultados', compact('resultados'));
    }
}
