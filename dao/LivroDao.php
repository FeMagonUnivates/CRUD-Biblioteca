<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Livro.php';

class LivroDao {
    private $tabela = 'livros';
    private $connection;

    public function __construct() {
        $db                 = new Database();
        $this->connection   = $db->connection;
    }

    public function salvar(Livro $livro) {
        $sql    = "INSERT INTO $this->tabela (titulo, autor, ano_publicacao, genero) VALUES (?, ?, ?, ?)";
        $stmt   = $this->connection->prepare($sql);

        $stmt->execute([
            $livro->getTitulo(), 
            $livro->getAutor(), 
            $livro->getAnoPublicacao(), 
            $livro->getGenero()
        ]);
    }

    public function buscarPorId($id) {
        $sql  = "SELECT * FROM $this->tabela WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $row  = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) return null;

        return new Livro(
            $row['titulo'],
            $row['autor'],
            $row['ano_publicacao'],
            $row['genero'],
            $row['id'],
        );
    }

    public function atualizar(Livro $livro) {
        $sql  = "UPDATE $this->tabela SET titulo = ?, autor = ?, ano_publicacao = ?, genero = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            $livro->getTitulo(), 
            $livro->getAutor(), 
            $livro->getAnoPublicacao(), 
            $livro->getGenero(),
            $livro->getId()
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

        $livros = [];
        
        foreach ($rows as $row) {
            $livros[] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano_publicacao'],
                $row['genero'],
                $row['id']
            );
        }

        return $livros;
    }
}

?>