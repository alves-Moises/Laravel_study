<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Doctrine\DBAL\Schema\View;
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
        $store  = Todo::create([
            'nome'=>'Mariana',
            'votos'=>5,
            'user_id'=>1
        ]);

        if($store){
            echo "Daddos foram inseridos com sucesso! O nome ".$store->nome." foi cadastrado ";
        }else{
            echo "Houve uma falha. tente novamente";
        }
    }


    public function update(Request $request)
    {

        // $update = Todo::where('id','=','10')
        //     ->update([
        //         'nome'=>'Robson'
        //     ]);

        $update = Todo::where('nome', '=', 'Thiago')
            ->where('votos','=','7')
            ->update([
                'nome'=>'Thas Coelho',
                'votos'=>13
            ]);
        
        if($update){
            echo "sucesso";
        }else{
            echo "Houve uma falha";
        }
    }

    public function delete(Request $request)
    {
        Todo::where('id', '=', $request->id)->delete();
    }

    //retona primeira view
    public function index()
    {

        $data = Todo::orderby('nome')->get();
        return view('carros', compact('data'));
    }
}



