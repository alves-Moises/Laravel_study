<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::orderBy('id')->get();
        foreach($pedidos as $pedido){
            echo $pedido->numero.'<br>';
            foreach($pedido->relatedItems as $item){
                echo $item->name.'<br>';
            }
            echo '<hr>';
            // dd($pedido->relatedItems);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
