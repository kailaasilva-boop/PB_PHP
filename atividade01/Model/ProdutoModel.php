<?php

class Usuario{
    private $nome;
    private $valor;
    private $quantidade;
    private $validade;
    private $ações;

    public function __construct($nome, $valor, $quantidade, $validade, $ações,){
        $this->nome= $nome;
        $this->quantidade = $quantidade;
        $this->validade = $validade;
        $this->ações = $ações;
      
    }

    public function salvar(){
        if(!isset($_SESSION['produto'])){
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'nome'=> $this->nome,
            'quantidade'=>$this->quantidade,
            'validade'=>$this->validade,
            'ações'=>$this->ações,
        ];
    }

    public static function listar(){
        return $_SESSION['produtos'] ?? [];
    }
}