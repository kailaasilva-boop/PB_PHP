<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h2>Livros</h2>
        <a href="PB_PHP/atividade01/livro/telaCadastro">Ir para tela Cadastra</a>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano_Pubicacao</th>
            <th>Editar</th> 
        </tr>
        <?php foreach$livrosas $id => $u): ?>
            <tr>
                <td><?=$u['titulo']?></td>
                <td><?=$u['autor']?></td>
                <td><?=$u['ano_pubicacao']?></td>
                <td><?=$u['editar']?></td>
                <td>
                    <a href="/PB_PHP/atividade01/livro/telaEditar?id=<?= $id ?>"?>
                        Editar
                    </a>
                    <a href="/PB_PHP/atividade01/excluir?id=<?= $id ?>"?>
                        Excluir
                    </a>
                </td>
                </td>
             </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

</body>
</html>