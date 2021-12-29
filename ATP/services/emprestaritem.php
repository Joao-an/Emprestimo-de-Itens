<?php
include 'conexao.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['item'])) {
    $idtem = $_POST['item'];
    $query = ("UPDATE `item` SET `usuariolocatario` = '{$_SESSION['usuario']}',`estatus` = 'Emprestado' WHERE `item`.`id_item` = $idtem;");
    $dados = mysqli_query($connect, $query);
    header('Location: /ATP/index.php');
}
?>
