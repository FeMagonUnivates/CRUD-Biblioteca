<?php

class Sugestao {
    private $id;
    private $cliente;
    private $livro;
    private $comentario;

    public function __construct($cliente, $livro, $comentario, $id = null) {
        $this->id               = $id;
        $this->cliente          = $cliente;
        $this->livro            = $livro;
        $this->comentario       = $comentario;
    }

    public function getId()             { return $this->id; }
    public function getCliente()        { return $this->cliente; }
    public function getLivro()          { return $this->livro; }
    public function getComentario()     { return $this->comentario; }
}

?>