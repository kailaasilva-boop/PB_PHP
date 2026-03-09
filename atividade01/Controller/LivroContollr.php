<?php

session_start();

class LivroController{
    public function telaCadastro(){
        require "View/LivroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicacao = $_POST['ano_pubicacao'];
        $editora = $_POST['editora'];

        $usuario = new Livro($titulo, $autor, $ano_publicacao, $editora);
        $usuario->salvar();
        //redirecionar ao depois de salvar
        header('Location: /PH_PHP/atividade01/livro, telaCadasto');
        exit;
    }

    public function listarLivro(){
        $usuario = Livro::listar();
        echo"<pre>";
        print_r($livos);
        require 'View/livoEditar.php';
    }

    public function atualizar(){
        $usuario = new Livro($_POST['titulo'], $_POST['autor'] $_POST['ano_pubicacao'] $_POST['editora']);
        $usuario->atualizar($_GET['id']);
        header('Location:/PB_PHP/atividade01/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location:/PB_PHP/atividade01/livro/listar');
        exit;
    }
}