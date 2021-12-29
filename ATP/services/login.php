<?php
session_start();
//-----Conexão com o Banco de Dados --------------------------------------------------------------------------
include ('conexao.php');
//-----Login--------------------------------------------------------------------------------------------------
if (empty($_POST['usuario'])||empty($_POST['senha'])) {
    header('Location: /ATP/login.php');
    exit();
}
$login = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$confirm ="SELECT * FROM `usuario` WHERE `nomeusuario` = '{$login}' and `senhausuario` = '{$senha}'";
$query = mysqli_query($connect, $confirm);

$row = mysqli_num_rows($query);

if ($row == 1) {
    $_SESSION['usuario'] = $login;
    header('Location: /ATP/index.php');
    exit();
} else{
    header('Location: /ATP/login.php');
    exit();
}
?> 
