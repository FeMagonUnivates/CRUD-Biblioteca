<?php

require_once __DIR__ . '/../controller/ClienteController.php';

$controller = new ClienteController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->atualizar();
    exit;
}

$id   = $_GET['id'] ?? null;
$cliente = $id ? $controller->buscarPorId($id) : null;

if (!$cliente) {
    header("Location: listacliente.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="../css/styleEditarCliente.css">
</head>

<body>
    
    <div class="card">

        <h2>Atualizar Cliente</h2>

        <form action="" method="POST">

            <input 
                type="hidden" 
                name="id"
                value="<?= htmlspecialchars($cliente->getId()) ?>">

            <label>Nome</label>
            <input
                type="text"
                placeholder="Nome do cliente"
                name="nome"
                value="<?= htmlspecialchars($cliente->getNome()) ?>">
            <br>

            <label>CPF</label>
            <input
                type="text"
                placeholder="CPF do cliente"
                name="cpf"
                value="<?= htmlspecialchars($cliente->getCPF()) ?>">
            <br>

            <label>Telefone</label>
            <input
                type="text"
                placeholder="Telefone do cliente"
                name="telefone"
                value="<?= htmlspecialchars($cliente->getTelefone()) ?>">
            <br>

            <label>CEP</label>
            <input 
                type="text"
                placeholder="00000-000"
                maxlength="9"
                minlength="9"
                pattern="[0-9]{5}-[0-9]{3}"
                id="cep"
                name="cep"
                value="<?= htmlspecialchars($cliente->getCEP()) ?>"
                required>
            <button type="button" id="btnCep">Buscar CEP</button>
            <br>

            <label>Rua</label>
            <input
                type="text"
                placeholder="Rua do cliente"
                id="rua"
                name="rua"
                value="<?= htmlspecialchars($cliente->getRua()) ?>">
            <br>

            <label>Bairro</label>
            <input
                type="text"
                placeholder="Bairro do cliente"
                id="bairro"
                name="bairro"
                value="<?= htmlspecialchars($cliente->getBairro()) ?>">
            <br>

            <label>Cidade</label>
            <input
                type="text"
                placeholder="Cidade do cliente"
                id="cidade"
                name="cidade"
                value="<?= htmlspecialchars($cliente->getCidade()) ?>">
            <br>

            <button type="submit" class="btnSalvarAlteracoes">Salvar alterações</button>
        </form>

        <div class="links">
            <div>
                <a href="listacliente.php">Ver clientes cadastrados</a>
            </div>
        </div>

    </div>

    <script src="../js/cep.js"></script>

</body>

</html>