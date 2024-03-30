<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario');
    }

    
    
    public function store(Request $request, int $idade)
    {
        //echo $idade;
        echo 'O seu nome é '.$request->nome.' e a sua idade é '.$idade;
        //dd($request);
        //echo $request->method();
        //echo $request->getRequestUri();
        //echo $request->fullUrl();
        //dd($request->all());
        //echo $request->string('nome');
        /*if($request->has('cidade')){
            echo 'sim';
        }else{
            echo 'não';
        }*/

        if($request->has('nome') && !empty($request->nome)){
            echo 'sim';
        }else{
            echo 'não';
        }
    }

    
}
