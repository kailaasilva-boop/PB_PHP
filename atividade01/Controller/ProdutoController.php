<?php

session_start();
require_once "./Model/ProdutoModel.php";

class ProdutoController{

     public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
     }

     public function cadastrar(){
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      $usuario = new Produto($nome, $email);
      $usuario->salvar();
      //redirecionar ao depois de salvar
      header('Location: /PB_PHP/mvc_exemplo/produto/telaCadastro');
      exit;


     }

     public function listarProdutos(){
      $usuarios = Produto::listar();
      echo "<pre>";
      print_r($usuarios);
      require 'View/produtoListar.php';
     }

} 