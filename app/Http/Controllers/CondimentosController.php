<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();

class CondimentosController extends Controller
{

    //Enviar os dados para a tela
    public function list($id)
    {   
        $_SESSION['condimentos'][$id] = [];
        echo '<pre>';
        var_dump(array_column($_SESSION['condimentos'],'idGeladeira'));
        //$arr = array_search($id,array_column($_SESSION['condimentos'],'idGeladeira'));
        //var_dump($_SESSION['condimentos']);
        echo '</pre>';
        if(array_column($_SESSION['condimentos'][0],'idGeladeira') === $id){
            var_dump(array_column($_SESSION['condimentos'],'idGeladeira'));
        }
        return view('condimentosGeladeira',
                        [   
                            'geladeira' => $_SESSION['geladeira'][$id],
                            'condimentos' => $_SESSION['condimentos'][$id],
                            'id' => $id
                        ]
                    );
    }

    //Abrir a pagina do create
    public function create($id)
    {   
        echo view('adicionarCondimentos',['id'=> $id,'alerta' => false])->render();
    }

    //Save Condimentos
    public function save(Request $request,$id)
    {

        array_push  (
            $_SESSION['condimentos'], 
            [
                'idGeladeira' => $id,
                'nome'=>$request->get('nome'),
                'qtd'=> $request->get('qtd')
            ]
        );

        return $this->list($id);
    }


}
