@extends('template')

    @section('content')

        <div class="container">

            <br>
                <h2>Condimentos Cadastradas da Geladeira</h2>
                <h3>Código: <b>{{$geladeira['codigo']}}</b></h3>
                <h3>Nome:   <b>{{$geladeira['nome']}}</b></h3>
            <br>

            <a href="{{ route('Condimentos.create',['id' => $id]) }}" class="btn btn-success">Adicionar Novo Condimento</a>

            <br><br>

            <!-- Table -->
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($condimentos as $index => $value)
                            <tr>
                                <td>{{$condimentos[$index]}}</td>
                                <td>
                                    <a href="{{ route('Geladeira.edit',['id'=>$index]) }}" class="btn btn-success">Editar</a>
                                    <a href="{{ route('Geladeira.delete',['id'=>$index]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>

        </div>

    @endsection