<?php
session_start();
include ('conexao.php');
$item = $_POST['itens'];
$dataem = $_POST['dataem'];
$datadev = $_POST['datadev'];
$contato = $_POST['contato'];
$query_user = ("SELECT * FROM `usuario` WHERE nomeusuario = '{$_SESSION['usuario']}';");
$iduser= mysqli_query($connect, $query_user);
$usuario = mysqli_fetch_assoc($iduser);
$locador = $usuario['id_usuario'];
$query_select = "INSERT INTO `item` (`nomeitem`, `dataemprestimo`, `datadevolucao`, `contatodestinatario`,`estatus`,`id_usuario`) VALUES ('$item','$dataem','$datadev','$contato','Disponivel','$locador');";
$query = mysqli_query($connect, $query_select);
    header('Location: /ATP/index.php');
?>
