@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $produto->nome }}</h1>
        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p><strong>Preço:</strong> {{ $produto->preco }}</p>
        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
        </form>
    </div>
@endsection
