@extends('template')

    @section('content')

        <div class="container">
            
            <h1>Cadastrar Condimentos</h1>

            <br><br>

            <form class="form-horizontal" method="POST" action="{{ route('Condimentos.save',['id'=>$id]) }}">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Produto">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="qtd">Qtd</label>
                    <div class="col-sm-10"> 
                    <input type="number" class="form-control" name="qtd" id="qtd" placeholder="Quantidade">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>


    @endsection