@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Produtos</h1>

        <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo Produto</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>
                            <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
