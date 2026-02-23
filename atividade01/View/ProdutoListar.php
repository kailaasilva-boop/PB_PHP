<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>

<h1>Produtos Cadastrados</h1>
<table border="1">
    <tr>
        <th>Valor</th>
        <th>Quantidade</th>
        <th>Validade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($produtos as $id => $produto): ?>
    <tr>
        <td>R$ <?= $produto['valor'] ?></td>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['validade'] ?></td>
        <td><?=$produto['ações']?></td>
        <td>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>