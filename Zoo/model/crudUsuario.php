<?php
include "conectarBD.php";

function cadastrarUsuario($nome, $senha){
    connect();
    $resultado = query("SELECT * FROM usuario WHERE nomusuario = '$nome'");
    if(mysqli_num_rows($resultado)> 0){
        $cadastrou = "nao";
    }
    else{
        query("INSERT INTO usuario (nomusuario, senhausuario) VALUES ('$nome', '$senha')");
        $cadastrou = "sim";
    }
    close();
    return $cadastrou;
}

function buscarUsuario($nome){
    connect();
    $resultado = query("SELECT * FROM usuario WHERE nomusuario = '$nome'");
    close();
    return $resultado;
}

function conectarUsuario($nome, $senha){
    connect();
}