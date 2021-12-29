<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Emprestimo de itens</title>
</head>
<link rel="stylesheet" href="style/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style\index.css">
<body>
<?php include 'services/tabeladeitens.php';?>
<header>
    <hgroup>
        <h1>Emprestimos do Jhony</h1>
        <h2>Seja Bem Vindo <?php session_start(); echo '<h2>'; print_r (ucfirst($_SESSION['usuario'])); echo '</h2>';?></h2>
    </hgroup>
    <aside>
        <!-- Menu -->
        <nav>
            <ul id="Menu">
                <li><a href="index.php"><input type="button" value="Home"></a></li>
                <li><a href="dadospessoais.php"><input type="button" value="Dados Pessoais"></a></li>
                <li><a href="meusitens.php"><input type="button" value="Meus Itens"></a></li>
                <li><a href="cadastroitens.php"><input type="button" value="Cadastro de itens"></a></li>
                <li><a href="login.php"><input type="button" value="Logoff"><?php session_abort(); ?></a></li>
            </ul>
        </nav>
    </aside>
</header>

<main>
    <article>
        <!--Tabela de itens-->
        <table>
            <form action="services/emprestaritem.php" method="POST">
            <caption id="leg"><h2>Lista de Itens emprestados/para emprestimo</h2></caption>
            <thead><tr><th style="width: 1%">Emprestar</th><th>Item</th><th>Data do Emprestimo</th><th>Previsão Devolução</th><th>Status</th></tr></thead>
            <tbody>
            <?php
            while ($linhas = mysqli_fetch_assoc($dados)){
                $hoje=date("Y-m-d");
                echo '<tr>';
                    echo '<td>';
                    echo '<input name="item" type="radio" value="'.$linhas["id_item"].'">';
                    echo '</td>';
                if ($hoje > $linhas["datadevolucao"] and $linhas["usuariolocatario"] != NULL) {
                    $procedimento = "UPDATE `item` SET `estatus` = 'Atrasado' WHERE `item`.`id_item` = {$linhas['id_item']};";
                    $query_proc = mysqli_query($connect, $procedimento);
                }
                foreach ($linhas as $key => $linha) {
                    if ($key != 'id_item' and $key != 'usuariolocatario') {
                        echo '<td>';
                        echo $linha;
                        echo '</td>';
                    }}
                echo '</tr>';
            } ?>
            </tbody>
                <tfoot><tr><th><input type="submit" value="Emprestar"></th></th><th></th><th></th><th></th><th></tr></tfoot>
            </form>
        </table>
    </article>
</main>
<footer>
    <p>Criado por João André Bueno - 2021</p>
</footer>
</body>
</html>