@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Produto</h1>
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            @include('produtos.form')
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
@endsection
