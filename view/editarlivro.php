<?php

require_once __DIR__ . '/../controller/LivroController.php';

$controller = new LivroController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->atualizar();
    exit;
}

$id   = $_GET['id'] ?? null;
$livro = $id ? $controller->buscarPorId($id) : null;

if (!$livro) {
    header("Location: listalivro.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Livro</title>
    <link rel="stylesheet" href="../css/styleEditarLivro.css">
</head>

<body>
    
    <div class="conteudo">

        <h2>Atualizar Livro</h2>

        <form action="" method="POST">

            <input 
                type="hidden" 
                name="id"
                value="<?= htmlspecialchars($livro->getId()) ?>">
            <br>

            <label>Título do livro</label>
            <input
                type="text"
                placeholder="Título do livro"
                name="titulo"
                value="<?= htmlspecialchars($livro->getTitulo()) ?>">
            <br>

            <label>Autor</label>
            <input
                type="text"
                placeholder="Autor do livro"
                name="autor"
                value="<?= htmlspecialchars($livro->getAutor()) ?>">
            <br>

            <label>Ano de publicação</label>
            <input
                type="number"
                placeholder="Ano de publicação do livro"
                name="ano_publicacao"
                value="<?= htmlspecialchars($livro->getAnoPublicacao()) ?>">
            <br>

            <label>Gênero</label>
            <input
                type="text"
                placeholder="Gênero do livro"
                name="genero"
                value="<?= htmlspecialchars($livro->getGenero()) ?>">
            <br>

            <button type="submit" class="btnSalvarAlteracoes">Salvar alterações</button>
        </form>

        <div class="links">
            <div>
                <a href="listalivro.php">Ver livros cadastrados</a>
            </div>
        </div>

    </div>

</body>

</html>