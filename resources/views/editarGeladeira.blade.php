@extends('template')

    @section('content')

    <div class="container">
        
        <h1>Editar Geladeira</h1>

        <br><br>
                                        
        <form class="form-horizontal" method="POST" action="{{ route('Geladeira.update',['id'=>$geladeira['id']]) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="codigo">Código Geladeira:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Adicione o Código da Geladeira" value="{{$geladeira['codigo']}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome Geladeira:</label>
                <div class="col-sm-10"> 
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Geladeira" value="{{$geladeira['nome']}}">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </div>
        </form>
    </div>


@endsection