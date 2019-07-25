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

    // public function create(LoginRequest $request)
    // {   
    //     $input = $request->all();
    //     LoginModel::create($input);

    //     return $this->index();
    // }

    //Deletar uma lista
    public function delete($id)
    {   
        unset($_SESSION['geladeira'][$id]);
        return $this->returnSession('delete');
    }

    public function edit($id)
    {
        // $login = LoginModel::find($id);
        // return view('edit',compact('login'));
    }

    // public function update(LoginRequest $request, $id)
    // {
    //     LoginModel::find($id)->update($request->all());
    //     return $this->index();
    // }
}
