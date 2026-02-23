<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Produtos</h2>
        <a href="PB_PHP/atividade01/produto/telaCadastro">Ir para tela Cadastra</a>
    <table border="1">
          <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Quantidade</th>
        <th>Validade</th>
        <th>Ações</th>
    </tr>
        <?php foreach($produtos as $u): ?>
            <tr>
                <td><?=$u['valor']?></td>
                <td><?=$u['quantidade']?></td>
                <td><?=$u['validade']?></td>
                <td><?=$u['ações']?></td>
                <td>próximo produtos</td>
             </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>