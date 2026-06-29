<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de sugestões</title>
</head>

<body>

    <div class="card">

        <h2>Sugestões cadastradas</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Livro</th>
                    <th>Comentário</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody id="tabelaSugestoes">

            </tbody>
        </table>

        <p id="mensagemVazia" style="display:none;">
            Nenhuma sugestão cadastrada.
        </p>
        
        <div class="links">
            
            <a href="cadastrarsugestao.php">Cadastrar nova sugestão</a>
        
            <a href="../index.html">Voltar para Início</a>
            
        </div>
        
    </div>

    <script src="../js/listaSugestao.js"></script>

</body>

</html>