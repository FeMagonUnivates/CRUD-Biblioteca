<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteDao {
    private $tabela = 'clientes';
    private $connection;

    public function __construct() {
        $db                 = new Database();
        $this->connection   = $db->connection;
    }

    public function salvar(Cliente $cliente) {
        $sql    = "INSERT INTO $this->tabela (nome, cpf, telefone, cep, rua, bairro, cidade) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt   = $this->connection->prepare($sql);

        $stmt->execute([
            $cliente->getNome(),
            $cliente->getCpf(),
            $cliente->getTelefone(),
            $cliente->getCep(),
            $cliente->getRua(),
            $cliente->getBairro(),
            $cliente->getCidade()
        ]);
    }

    public function buscarPorId($id) {
        $sql  = "SELECT * FROM $this->tabela WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $row  = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) return null;

        return new Cliente(
            $row['nome'],
            $row['cpf'],
            $row['telefone'],
            $row['cep'],
            $row['rua'],
            $row['bairro'],
            $row['cidade'],
            $row['id']
        );
    }

    public function atualizar(Cliente $cliente) {
        $sql  = "UPDATE $this->tabela SET nome = ?, cpf = ?, telefone = ?, cep = ?, rua = ?, bairro = ?, cidade = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            $cliente->getNome(),
            $cliente->getCpf(),
            $cliente->getTelefone(),
            $cliente->getCep(),
            $cliente->getRua(),
            $cliente->getBairro(),
            $cliente->getCidade(),
            $cliente->getId()
        ]);
    }

    public function deletar($id) {
        $sql  = "DELETE FROM $this->tabela WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    public function listar() {
        $sql  = "SELECT * FROM $this->tabela";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $clientes = [];
        
        foreach ($rows as $row) {
            $clientes[] = new Cliente(
                $row['nome'],
                $row['cpf'],
                $row['telefone'],
                $row['cep'],
                $row['rua'],
                $row['bairro'],
                $row['cidade'],
                $row['id']
            );
        }

        return $clientes;
    }
}

?>