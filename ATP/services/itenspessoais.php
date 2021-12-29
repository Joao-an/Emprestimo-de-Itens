<?php
session_start();
include('conexao.php');
$query_user = ("SELECT * FROM `usuario` WHERE nomeusuario = '{$_SESSION['usuario']}';");
$iduser= mysqli_query($connect, $query_user);
$usuario = mysqli_fetch_assoc($iduser);
$locador = $usuario['id_usuario'];
mysqli_select_db($connect, DATABASE);
$query = sprintf("SELECT id_item, nomeitem, dataemprestimo, datadevolucao, estatus, usuariolocatario FROM `item` WHERE `id_usuario` = '$locador';");
$dados = mysqli_query($connect, $query);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['item'])) {
    $idtem = $_POST['item'];
    $query = ("DELETE FROM `item` WHERE `item`.`id_item` = $idtem;");
    $dados = mysqli_query($connect, $query);
    header('Location: /ATP/meusitens.php');
}

?>
