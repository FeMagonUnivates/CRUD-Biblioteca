<?php

class Livro {
    private $id;
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $genero;

    public function __construct($titulo, $autor, $anoPublicacao, $genero, $id = null) {
        $this->id               = $id;
        $this->titulo           = $titulo;
        $this->autor            = $autor;
        $this->anoPublicacao    = $anoPublicacao;
        $this->genero           = $genero;
    }

    public function getId()             { return $this->id; }
    public function getTitulo()         { return $this->titulo; }
    public function getAutor()          { return $this->autor; }
    public function getAnoPublicacao()  { return $this->anoPublicacao; }
    public function getGenero()         { return $this->genero; }
}

?>