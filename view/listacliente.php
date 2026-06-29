<?php

require_once __DIR__ . '/../controller/ClienteController.php';

$controller = new ClienteController();
$clientes = $controller->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="../css/styleListaCliente.css">
</head>

<body>

    <div class="card">

        <h2>Clientes Cadastrados</h2>

        <?php if (count($clientes) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Rua</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Editar / Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente): ?>
                        <tr>
                            <td><?= $cliente->getId() ?></td>
                            <td><?= $cliente->getNome() ?></td>
                            <td><?= $cliente->getCPF() ?></td>
                            <td><?= $cliente->getTelefone() ?></td>
                            <td><?= $cliente->getRua() ?></td>
                            <td><?= $cliente->getBairro() ?></td>
                            <td><?= $cliente->getCidade() ?></td>
                            <td>
                                <a class="btnEditar" href="editarcliente.php?id=<?= $cliente->getId() ?>">Editar</a>

                                <form action="deletarcliente.php" method="POST" style="display:inline"
                                    onsubmit="return confirm('Deseja realmente excluir o cliente?')">
                                    <input type="hidden" name="id" value="<?= $cliente->getId() ?>">
                                    <button type="submit" class="btnExcluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum cliente cadastrado.</p>
        <?php endif; ?>
        
        <div class="links">
            
            <a href="cadastrarcliente.php">Cadastrar novo cliente</a>
        
            <a href="../index.html">Voltar para Início</a>
            
        </div>
        
    </div>

</body>

</html>