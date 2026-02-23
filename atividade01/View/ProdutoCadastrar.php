<!DOCTYPE html>
<html>
<head>
    <title>Novo Produto</title>
</head>
<body>

<h2>Cadastrar Produto</h2>

<form method="POST" action="index.php?action=salvar">
    Nome: <input type="text" name="nome" required>
    Preço: <input type="number" step="0.01" name="preco" required>
    Quantidade: <input type="number" name="quantidade" required>
    Validade: <input type="date" name="validade" required>

    <button type="submit">Salvar</button>
</form>

<a href="index.php">Voltar</a>

</body>
</html>