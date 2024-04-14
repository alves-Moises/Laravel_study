<?php

namespace App\Http\Controllers;

use App\Models\FormExercicio;
use Illuminate\Http\Request;

class FormExercicioController extends Controller
{
    public function formulario(Request $request)
    {
        return view('exercicio_form');
    }

    public function store(Request $request)
    {
        if($request->idade >= 18){
            echo "aprovado";
        }else{
            echo "reprovado";
        }
    }
}
