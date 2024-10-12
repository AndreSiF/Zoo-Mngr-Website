<?php
include '../model/crudAnimais.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        cadastrarAnimais($_POST["nome"], $_POST["peso"], $_POST["idade"]);
        header("Location: ../view/CadastrarAnimais.php");
        break;

    case 'Alterar':
        editarAnimais($_POST["nome"], $_POST["peso"], $_POST["idade"], $_POST["codigo"]);
        header("Location: ../view/mostrarAnimais.php");
        break;

    case 'Excluir':
        excluirAnimais($_POST["codigo"]);
        header("Location: ../view/mostrarAnimais.php");
        break;
}
