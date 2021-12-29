<?php
session_start();
include "conexao.php";
$query = sprintf("SELECT nomeusuario, senhausuario, email,datanascimento FROM `usuario` WHERE nomeusuario = '{$_SESSION['usuario']}';");
$iduser= mysqli_query($connect, $query);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['salvaru'])){
    $nuser = $_POST['nuser'];
    $alteruser =  ("UPDATE `usuario` SET `nomeusuario` = '{$nuser}' WHERE `usuario`.`nomeusuario` = '{$_SESSION['usuario']}';");
    $query_user = mysqli_query($connect, $alteruser);
    header('Location: /ATP/login.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['salvars'])){
    $nsenha = $_POST['nsenha'];
    $alteruser =  ("UPDATE `usuario` SET `senhausuario` = '{$nsenha}' WHERE `usuario`.`nomeusuario` = '{$_SESSION['usuario']}';");
    $query_user = mysqli_query($connect, $alteruser);
    header('Location: /ATP/dadospessoais.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['salvare'])){
    $nemail = $_POST['nemail'];
    $alteruser =  ("UPDATE `usuario` SET `email` = '{$nemail}' WHERE `usuario`.`nomeusuario` = '{$_SESSION['usuario']}';");
    $query_user = mysqli_query($connect, $alteruser);
    header('Location: /ATP/dadospessoais.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['salvard'])){
    $ndata = $_POST['ndata'];
    $alteruser =  ("UPDATE `usuario` SET `datanascimento` = '{$ndata}' WHERE `usuario`.`nomeusuario` = '{$_SESSION['usuario']}';");
    $query_user = mysqli_query($connect, $alteruser);
    header('Location: /ATP/dadospessoais.php');
}
?>
