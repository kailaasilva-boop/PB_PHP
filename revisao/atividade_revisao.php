<?php
    session_start();
    class Usuario{
        private $nome;
        private $sobrenome;
        private $nota;
        private $datadenascimento;

    public function __construct($nome, $sobrenome, $nota, $dataNascimento) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->nota = $nota;
        $this->dataNascimento = $dataNascimento;
    }

    public function salvar() {
        if (!isset($_SESSION['alunos'])) {
            $_SESSION['alunos'] = [];
        }
        $_SESSION['alunos'][] = [
            'nome' => $this-> nome,
            'sobrenome'=> $this-> sobrenome,
            'nota'=> $this-> nota,
            'datadenascimento'=> $this->dataNascimento
        ];
    }
}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $datadenascimento = $_POST['datadenascimento'];

        $usuario = new Usuario($nome, $sobrenome, $nota, $datadenascimento);
        $usuario->salvar();
    }

    if(isset($_GET['reset'])){
        session_destroy();
    }

    //exebir session
    echo "<PRE>";
    print_r($_SESSION);
    echo "</pre>";

?>

<!DOCTYPE html>
<html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <title>Cadrasto de Aluno</title>
    <head>
    <body>
        <h2 style='color:darkblue; font-family:Arial'> Cadrasto de Aluno</h2>
        <form action='' method='POST' style="background:#f2f2f2; padding:15px border-radius:8px; width: 300px">
            Nome: <br>
            <input type= "text" name="nome" value='' style="width:100%; margin-bottom:10px"><br>
            Sobrenome: <br>
            <input type='text' name='sobrenome' value='' style='width:100%; margin-bottom:10px'><br>
            Nota: <br>
            <input type='number' name='nota' value='' style='width:100%; margin-bottom:10px'><br>
            Data de nascimento: <br>
            <input type='date' name='datadenascimento' value='' style='width:100%; margin-bottom:10px'><br>
            <button type='submit' style='background:green; color:white; padding:5px 10px;'>cadrastrar</button>
            <button type='reset' style='background:red; color:white; padding: 5px 10px;'>limpar</button>
        </form>
        <?php if(isset($_SESSION['usuarios'])):?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Nota</th>
                <th>Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['usuarios'] as $usuario):?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['sobrenome']?></td>
                <td><?= $usuario['nota']?></td>
                <td><?= $usuario['datadenascimento']?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php endif;?>

  </body>
</html>