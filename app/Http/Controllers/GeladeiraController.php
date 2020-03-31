<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();

class GeladeiraController extends Controller
{

    /* RETORNA TODOS OS DADOS*/
    public function index()
    {
        $this->sessionDefined();
        echo view('home',['Geladeira'=> $_SESSION['geladeira'],'alerta' => false])->render();
    }

    //Inserindo dados na Session Criada
    public function sessionDefined()
    {
        $_SESSION['geladeira'] = [];
        array_push($_SESSION['geladeira'], ['codigo'=>'C4FE','nome'=> 'Frigobar']);
        array_push($_SESSION['geladeira'], ['codigo'=>'C4F56','nome'=> 'Geladeira Casa 1']);
        array_push($_SESSION['geladeira'], ['codigo'=>'C4F9234','nome'=> 'Geladeira Casa 2']);
    }   

    //Tela do session sem adição
    public function returnSession($nomeSucess)
    {
        echo view('home',['Geladeira'=> $_SESSION['geladeira'],'alerta' => $nomeSucess])->render();
    }

    //Abrir tela de Adicionar Geladeira
    public function addFridge()
    {
        echo view('adicionarGeladeira',['Geladeira'=> $_SESSION['geladeira'],'alerta' => false])->render();
    }

    //Criar uma nova geladeira
    public function create(Request $request)
    {   
        array_push  (
                        $_SESSION['geladeira'], 
                        [
                            'codigo'=>$request->get('codigo'),
                            'nome'=> $request->get('nome')
                        ]
                    );

        $this->returnSession('create');
    }

    //Deletar uma Geladeira
    public function delete($id)
    {   
        unset($_SESSION['geladeira'][$id]);
        return $this->returnSession('delete');
    }

    //Enviar os dados para a tela
    public function edit($id)
    {
        $geladeira = array_merge($_SESSION['geladeira'][$id], ['id'=>$id]);
        return view('editarGeladeira',compact('geladeira'));
    }

    //Editar os dados
    public function update(Request $request, $id)
    {

        $_SESSION['geladeira'][$id] = 
        [
            'codigo'=>$request->get('codigo'),
            'nome'=> $request->get('nome')
        ];

        return $this->returnSession('edit');
    }
}
