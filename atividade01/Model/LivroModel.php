<?php

class Livro{
    private $titulo;
    private $autor;
    private $ano_pubicacao;
    private $editar;
}

public function __construct($titulo, $autor, $ano_pubicacao, $editar){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->ano_publicacao = $ano_pubicacao;
    $this->editar = $editar;
}

public function salvar(){
    if(!isset($_SESSION['livros'])){
        $_SESSION['livors'] = [];
    }

    $_SESSION['livros'] [] = [
        'titulo'=>titulo,
        'autor'=>autor,
        'ano_publicacao'=>ano_pubicacao,
        'editar'=>editar
    ];
}

public static function listar(){
    return $_SESSION['livros'] ?? [];
}

public static function busacar($id){
    //selec * from livros where id = $id
    return $_SESSION['livros'][$id] ?? null;
}

public function autualizar($id){
    if(isset($_SESSION['livros'][$id])){ // verificar se o livro existe
        $_SESSION['livros'][$id] = [ // atualizar novos dados
            'titulo'=> $this->titulo,
            'autor'=> $this->autor,
            'ano_publicacao'=> $this->ano_pubicacao,
            'editar'=> $this->editar
        ];
    }
}

public static function excluir($id){
    if(isset($_SESSION['livros'][$id])){ // verificar se o livro existe
        unset($_SESSION['livros'][$id]); // remove o livro
     
    }
 }

}