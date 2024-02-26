<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function teste(Request $request)
    {
        return redirect('sucesso');
    }

    public function testesucesso(Request $request)
    {
        echo "Essa rota foi direcionada!";
    }

    public function usuario(Request $request)
    {
        echo $request->id;
        // if(isset($request->id)){
        //     return "Esse é o usuário ".$request->id;
        // }else{
        //     return "Trata-se de um novo usuario";
        // }
    }

    public function pagina404(Request $request)
    {
        return 'Essa página não foi encontrada';
    }
}
