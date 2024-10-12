<?php
include "conectarBD.php";

function cadastrarAnimais($nome, $peso, $idade){
    connect();
    query("INSERT INTO animal (nomanimal, pesoanimal, idadeanimal) VALUES ('$nome', $peso, $idade)");
    close();
}

function mostrarAnimais(){
    connect();
    $resultados = query("SELECT * FROM animal");
    close();
    return $resultados;
}

function mostrarAnimaisEdt($codigo){
    connect();
    $resultados = query("SELECT * FROM animal WHERE codanimal=$codigo");
    close();
    return $resultados;
}

function editarAnimais($nome, $peso, $idade, $codigo){
    connect();
    query("UPDATE animal SET nomanimal = '$nome', pesoanimal = $peso, idadeanimal = $idade WHERE codanimal=$codigo");
    close();
}

function excluirAnimais($codigo){
    connect();
    query("DELETE FROM animal WHERE codanimal=$codigo");
    close();
}