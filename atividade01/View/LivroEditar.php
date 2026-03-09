<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <a href="PB_PHP/atividade01/livro/listar">ir para tela Listar</a>

    <form method="POST" action=action="atualizar?id=<?= $_GET['id'] ?>">
    <input type="text" name="id" valeu="<?= htmlspecialchars($_GET['id'])?>"disabled>
    <input type="text" name="titulo" value ="<?= htmlspecialchars($usuario['titulo'])?>" required>
    <input type="text" name="autor" value ="<?= htmlspecialchars($usuario['autor'])?>"required>
    <input type="text" name="ano_publicacao" value ="<?= htmlspecialchars($usuario['ano_publicacao'])?>" required>
     <input type="text" name="editar" value ="<?= htmlspecialchars($usuario['editar'])?>"required>
    <button type="submit">Editar</button>
</body>
</html>