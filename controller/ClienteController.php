<?php

require_once __DIR__ . '/../dao/ClienteDao.php';

class ClienteController {

    public function listar() {
        $dao = new ClienteDao();
        return $dao->listar();
    }

    public function buscarPorId($id) {
        $dao = new ClienteDao();
        return $dao->buscarPorId($id);
    }

    public function atualizar() {
        $cliente = new Cliente(
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['telefone'],
            $_POST['cep'],
            $_POST['rua'],
            $_POST['bairro'],
            $_POST['cidade'],
            $_POST['id'],
        );

        $dao = new ClienteDao();
        $dao->atualizar($cliente);

        header("Location: listacliente.php");
    }

    public function deletar() {
        $dao = new ClienteDao();
        $dao->deletar($_POST['id']);

        header("Location: listacliente.php");
    }

    public function salvar() {
        $cliente = new Cliente(
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['telefone'],
            $_POST['cep'],
            $_POST['rua'],
            $_POST['bairro'],
            $_POST['cidade']
        );

        $dao = new ClienteDao();
        $dao->salvar($cliente);

        header("Location: listacliente.php");
    }

}

?>