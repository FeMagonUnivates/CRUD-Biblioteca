<?php
require_once __DIR__ . '/../controller/ClienteController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ClienteController();
    $controller->deletar();
    exit;
}

header("Location: listacliente.php");

?>