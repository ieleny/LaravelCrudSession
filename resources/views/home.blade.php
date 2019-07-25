@extends('template')

    @section('content')

    <div class="container">

        <!-- Alerts-->
        @if ($alerta === false)
            <div class="alert alert-success pull-right" role="alert">
                <strong>Bem Vindo!</strong>Para cadastrar uma nova Geladeira clique no botão "Adicionar Nova Geladeira".
            </div>
        @elseif ($alerta === 'delete')
            <div class="alert alert-success pull-right" role="alert">
                <strong>Dados Deletados com Sucessso!</strong>.
            </div>
        @elseif ($alerta === 'create')
            <div class="alert alert-success pull-right" role="alert">
                <strong>Dados Salvos com Sucessso!</strong>.
            </div>
        @elseif ($alerta === 'edit')
            <div class="alert alert-success pull-right" role="alert">
                <strong>Dados Editados com Sucessso!</strong>.
            </div>
        @endif

        <br>

        <h2>Geladeiras Cadastradas</h2>
        <p>Geladeiras cadastradas, no sistema</p>    

        <br>

        <a href="{{ url('create') }}" class="btn btn-success">Adicionar Nova Geladeira</a>
        
        <br><br>

        <!-- Table -->
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Código Geladeira</th>
                <th>Nome Geladeira</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                    @foreach($Geladeira as $index => $value)
                        <tr>
                            <td>{{$Geladeira[$index]['codigo']}}</td>
                            <td>{{$Geladeira[$index]['nome']}}</td>
                            <td>
                                <a href="{{ route('Geladeira.edit',['id'=>$index]) }}" class="btn btn-info">Adicionar Condimentos</a>
                                <a href="{{ route('Geladeira.edit',['id'=>$index]) }}" class="btn btn-success">Editar</a>
                                <a href="{{ route('Geladeira.delete',['id'=>$index]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>

    </div>

    
        <!-- <div class="jumbotron">
            
            <h1>Gerenciador de Condimentos da Geladeira</h1>

            <p>Selecione o tipo Geladeira</p>

            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Selecione
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Geladeira Com uma Porta</a></li>
                    <li><a href="#">Geladeira Duplex</a></li>
                    <li><a href="#">Geladeira Inverse</a></li>
                    <li><a href="#">Geladeira Side by Side</a></li>
                    <li><a href="#">Geladeira Frech Door</a></li>
                </ul>
            </div>
        <img src="{{ asset('img/2871-c.jpg') }}" height="50%" width="50%"/> </div>
        
        -->
            

            

@endsection