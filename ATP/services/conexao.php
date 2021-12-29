<?php
define('SERVERNAME', 'localhost:3306');
define('DATABASE','emprestimo_de_itens');
define('USERNAME','teste');
define('PASSWORD','teste');

$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die ("Não foi possível conectar!");
?>
