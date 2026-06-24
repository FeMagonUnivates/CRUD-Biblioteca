<?php

require_once __DIR__ . '/../controller/LivroController.php';

$controller = new LivroController();
$livros = $controller->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Livros</title>
    <link rel="stylesheet" href="../css/styleListaLivro.css">
</head>

<body>

    <div class="conteudo">

        <h2>Livros cadastrados</h2>

        <?php if (count($livros) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Ano de Publicação</th>
                        <th>Gênero</th>
                        <th>Editar / Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?= $livro->getId() ?></td>
                            <td><?= $livro->getTitulo() ?></td>
                            <td><?= $livro->getAutor() ?></td>
                            <td><?= $livro->getAnoPublicacao() ?></td>
                            <td><?= $livro->getGenero() ?></td>
                            <td>
                                <a class="btn-editar" href="editarlivro.php?id=<?= $livro->getId() ?>">Editar</a>

                                <form action="deletarlivro.php" method="POST" style="display:inline"
                                    onsubmit="return confirm('Deseja realmente excluir o livro?')">
                                    <input type="hidden" name="id" value="<?= $livro->getId() ?>">
                                    <button type="submit" class="btn-excluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum livro cadastrado.</p>
        <?php endif; ?>
        
        <div class="links">
            <div>
                <a href="cadastrarlivro.php">Cadastrar novo livro</a>
            </div>
            <div>
                <a href="../index.html">Voltar para Início</a>
            </div>
        </div>
        
    </div>

</body>

</html>