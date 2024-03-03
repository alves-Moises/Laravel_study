<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function dados(Request $request)
    {
        // $dados = todo::
        // $dados = todo::all();

        $dados = Todo::select('nome as nick', 'votos')
            ->where('votos', '>=', 5)
            ->orderBy('nome', 'desc')
            ->get();

        dd($dados);
        $users = '';
        foreach($dados as $dado){
            $users .= $dado->nome.'<br>';
        }
        return 'Os usuarios cadastrados sao: <br>'.$users;


    }

    public function pegarRelacionamento(Request $request)
    {
        $query = Todo::select('todos.*', 'users.*', 'users.created_at as ucreated_at')
            ->rightjoin('users', 'todos.user_id', '=', 'users.id')
            ->get();
        
        dd($query);
    }

    public function inserir(Request $request)
    {
        $store = todo::create([
            'nome'=>'Mariana',
            'votos'=>9,
            'user_id'=>2
        ]);
        if($store){
            echo "Dados inseridos com sucesso! O ome ".$store.name." foi cadastrado."; 
        }else{
            echo "Houve uma faila! Tente novamente.";
        }
    }
}
