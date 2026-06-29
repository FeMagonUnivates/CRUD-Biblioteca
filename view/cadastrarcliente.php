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
    <link rel="stylesheet" href="../css/styleCadastrarCliente.css">
</head>

<body>

    <div class="card">

        <h2>Cadastro de Clientes</h2>

        <form action="" method="POST">
            
            <label>Nome</label>
            <input 
                type="text"
                placeholder="Nome do cliente" 
                name="nome" 
                required>

            <label>CPF</label>
            <input 
                type="text" 
                placeholder="CPF do cliente"
                maxlength="11"
                minlength="11"
                name="cpf"
                required>

            <label>Telefone</label>
            <input
                type="text"
                maxlength="11"
                placeholder="Telefone do cliente" 
                name="telefone">

            <label>CEP</label>
            <input 
                type="text"
                placeholder="00000-000"
                maxlength="9"
                minlength="9"
                pattern="[0-9]{5}-[0-9]{3}"
                id="cep"
                name="cep"
                required>
            <button type="button" id="btnCep">Buscar CEP</button>

            <label>Rua</label>
            <input 
                type="text"
                placeholder="Rua do cliente"
                id="rua"
                name="rua">

            <label>Bairro</label>
            <input 
                type="text" 
                placeholder="Bairro do cliente"
                id="bairro"
                name="bairro">

            <label>Cidade</label>
            <input 
                type="text" 
                placeholder="Cidade do cliente"
                id="cidade"
                name="cidade">

            <button class="btnCadastrar" type="submit">Cadastrar</button>

        </form>

        <div class="links">

            <a href="listacliente.php">Ver clientes cadastrados</a>
        
            <a href="../index.html">Voltar para Início</a>
            
        </div>
    </div>

    <script src="../js/cep.js"></script>

</body>

</html>