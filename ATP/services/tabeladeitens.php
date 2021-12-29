<?php
    include ('conexao.php');

mysqli_select_db($connect, DATABASE);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id_item,nomeitem, dataemprestimo, datadevolucao,estatus,usuariolocatario FROM `item`;");
// executa a query
$dados = mysqli_query($connect, $query);
?>
