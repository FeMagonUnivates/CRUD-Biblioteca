<?php

class Cliente {
    private $id;
    private $nome;
    private $cpf;
    private $telefone;
    private $cep;

    public function __construct($nome, $cpf, $telefone, $cep, $id = null) {
        $this->id               = $id;
        $this->nome             = $nome;
        $this->cpf              = $cpf;
        $this->telefone         = $telefone;
        $this->cep              = $cep;
    }

    public function getId()             { return $this->id; }
    public function getNome()           { return $this->nome; }
    public function getCpf()            { return $this->cpf; }
    public function getTelefone()       { return $this->telefone; }
    public function getCep()            { return $this->cep; }
}

?>