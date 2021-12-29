<?php
//-----Conexão com o Banco de Dados --------------------------------------------------------------------------
include ('conexao.php');
//-----Criação de usuário -------------------------------------------------------------------------------------
$login = $_POST['user'];
$senha = $_POST['senha'];
$data = $_POST['data'];
$email = $_POST['email'];
if($login==""|| $login==null){
    header('Location: /ATP/Cadastro.php');
}
    elseif($email==""|| $email==null){
        header('Location: /ATP/Cadastro.php');
    }
        elseif($data==""|| $data==null){
            header('Location: /ATP/Cadastro.php');
        }
            elseif($senha==""|| $senha==null){
                header('Location: /ATP/Cadastro.php');
            }
                else{
                    $query_select = "INSERT INTO `usuario` (`nomeusuario`, `senhausuario`, `email`, `datanascimento`) VALUES
                    ('$login','$senha','$email','$data');";
                    $insert = mysqli_query($connect, $query_select);
                    header('Location: /ATP/login.php');
                }
?>