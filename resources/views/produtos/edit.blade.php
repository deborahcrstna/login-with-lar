@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Produto</h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('produtos.form')
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
