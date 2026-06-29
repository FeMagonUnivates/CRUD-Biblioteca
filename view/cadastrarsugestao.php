    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Sugestões</title>
    <link rel="stylesheet" href="../css/styleCadastrarSugestao.css">
</head>

<body>

    <div class="card">

        <h2>Cadastro de Sugestões</h2>

        <form id="form">
            
            <label>Cliente</label>
            <input 
                type="text"
                placeholder="Nome do cliente" 
                id="cliente"
                name="cliente" 
                required>

            <label>Livro</label>
            <input 
                type="text" 
                placeholder="Nome do livro"
                id="livro"
                name="livro"
                required>

            <label>Comentário</label>
            <textarea
                placeholder="Comentário sobre o livro"
                id="comentario"
                name="comentario"></textarea>
            
            <button class="btnCadastrar" type="submit">Cadastrar</button>

        </form>

        <div class="links">

            <a href="listasugestao.php">Ver sugestões cadastradas</a>
        
            <a href="../index.html">Voltar para Início</a>
            
        </div>
    </div>

    <script src="../js/cadastrarSugestao.js"></script>

</body>

</html>