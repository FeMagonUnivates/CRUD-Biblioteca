<?php

require_once __DIR__ . '/../controller/ClienteController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ClienteController();
    $controller->salvar();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>
    <link rel="stylesheet" href="../css/styleCadastraCliente.css">
</head>

<body>
    
    <div class="conteudo">

        <h2>Cadastro de Clientes</h2>

        <form action="" method="POST">
            
            <label>Nome</label>
            <input 
                type="text" 
                placeholder="Nome do cliente" 
                name="nome" 
                required>
            <br>

            <label>CPF</label>
            <input 
                type="text" 
                placeholder="CPF do cliente" 
                name="cpf" 
                required>
            <br>

            <label>Telefone</label>
            <input 
                type="text" 
                placeholder="Telefone do cliente" 
                name="telefone">
            <br>

            <label>CEP</label>
            <input 
                type="text" 
                placeholder="CEP do cliente" 
                name="cep" 
                required>
            <br>

            <button id="btnCep">Buscar CEP</button>

            <label>Rua</label>
            <input 
                type="text" 
                placeholder="Rua do cliente" 
                name="rua">
            <br>

            <label>Bairro</label>
            <input 
                type="text" 
                placeholder="Bairro do cliente" 
                name="bairro">
            <br>

            <label>Cidade</label>
            <input 
                type="text" 
                placeholder="Cidade do cliente" 
                name="cidade">
            <br>

            <button type="submit">Cadastrar</button>

        </form>

        <div class="links">
            <div>
                <a href="listacliente.php">Ver clientes cadastrados</a>
            </div>
            <div>
                <a href="../index.html">Voltar para Início</a>
            </div>
        </div>
        
    </div>

</body>

</html>