<?php

require_once __DIR__ . '/../controller/LivroController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new LivroController();
    $controller->salvar();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livros</title>
    <link rel="stylesheet" href="../css/styleCadastrarLivro.css">
</head>

<body>

    <div class="card">

        <h2>Cadastro de Livros</h2>

        <form action="" method="POST">
            
            <label>Título do livro</label>
            <input 
                type="text" 
                placeholder="Título do livro" 
                name="titulo" 
                required>
            <br>

            <label>Autor</label>
            <input 
                type="text" 
                placeholder="Autor do livro" 
                name="autor"
                required>
            <br>

            <label>Ano de publicação</label>
            <input 
                type="text" 
                placeholder="Ano de publicação do livro"
                maxlength="4"
                name="ano_publicacao"
                required>
            <br>

            <label>Gênero</label>
            <input 
                type="text" 
                placeholder="Gênero do livro"
                name="genero">
            <br>

            <button class="btnCadastrar" type="submit">Cadastrar</button>
        </form>

        <div class="links">
            
            <a href="listalivro.php">Ver livros cadastrados</a>
        
            <a href="../index.html">Voltar para Início</a>
            
        </div>
    </div>

</body>

</html>