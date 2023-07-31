<div class="form-group">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $produto->nome ?? '') }}" required>
</div>

<div class="form-group">
    <label for="descricao">Descrição do Produto:</label>
    <textarea name="descricao" id="descricao" class="form-control" required>{{ old('descricao', $produto->descricao ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="preco">Preço do Produto:</label>
    <input type="number" name="preco" id="preco" class="form-control" step="0.01" value="{{ old('preco', $produto->preco ?? '') }}" required>
</div>
