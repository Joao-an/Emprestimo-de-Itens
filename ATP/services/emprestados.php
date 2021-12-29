<?php
session_start();
include('conexao.php');
$query = sprintf("SELECT id_item,nomeitem, dataemprestimo, datadevolucao,estatus,contatodestinatario FROM `item` WHERE `usuariolocatario` = '{$_SESSION['usuario']}';");
$dados = mysqli_query($connect, $query);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['item'])) {
    $idtem = $_POST['item'];
    $query = ("UPDATE `item` SET `usuariolocatario` = NULL,`estatus` = 'Disponivel' WHERE `item`.`id_item` = $idtem;");
    $dados = mysqli_query($connect, $query);
    header('Location: /ATP/emprestados.php');
}
?>

