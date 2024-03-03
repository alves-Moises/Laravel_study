<?php

namespace App\Http\Controllers;

use App\Models\Nome;
use Illuminate\Http\Request;

class NomeController extends Controller
{
    //pesquisa opcional
    public function pesquisa(Request $request)
    {
        
        
        $nomes = Nome::where('nome', 'like', '%'.$request->name.'%')
            ->when($request->startDate, function($query) use($request){
                $starDate = new \DateTime($request->startDate);
                $endDate = new \DateTime($request->endDate);
                $query('data', '>=', $starDate->format('Y-m-d').' 00:00:00');
                $query('data', '<=', $endDate->format('Y-m-d').' 23:59:59');;

            })
            ->get();
                        
            dd($nomes);
    }
}
