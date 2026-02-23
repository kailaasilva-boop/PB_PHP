<?php

session_start();
require_once "./Model/UsuarioModel.php";

class UsuarioController{

     public function telaCadastro(){
        require "View/UsuarioCadastrar.php";
     }

     public function cadastrar(){
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      $usuario = new Usuario($nome, $email);
      $usuario->salvar();
      //redirecionar ao depois de salvar
      header('Location: /PB_PHP/mvc_exemplo/usuario/telaCadastro');
      exit;


     }

     public function listarUsuarios(){
      $usuarios = Usuario::listar();
      echo "<pre>";
      print_r($usuarios);
      require 'View/usuarioListar.php';
     }

} 