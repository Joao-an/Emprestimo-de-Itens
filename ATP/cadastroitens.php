<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de itens</title>
    <link rel="stylesheet" href="style\index.css">
</head>
<style>
    #cadastroitens{
        position: absolute;
        margin-left: 40%;
        margin-top: 150px;
        border: 1px solid black;
        padding: 10px;
    }
    li{
        list-style: none;
        margin: 5px;
    }

    h2{
        font-family: 'Orbitron', sans-serif;
        font-size: 20px;
    }
</style>
<body>
<header>
    <hgroup>
        <h1>Emprestimos do Jhony</h1>
        <h2>Seja Bem Vindo</h2>
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
    <form action="services/cadastroitens.php" method="post">
        <ul id="cadastroitens">
            <h2>Cadastro de itens</h2>
            <li><input name="itens" type="text" placeholder="Nome item" size="25"></li>
            <li><input name="dataem" placeholder="Data para Emprestimo" class="textbox-n" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" id="dataem" size="25"></li>
            <li><input name="datadev" placeholder="Previsão Devolução" class="textbox-n" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" id="datadev" size="25"></li>
            <li><input name="contato" placeholder="Contato" type="text" size="25"></li>
            <li><a href="index.php"><input type="submit" value="Cadastrar"></a></li>
        </ul>
    </form>
</main>
<footer>
    <p>Criado por João André Bueno - 2021</p>
</footer>
</body>
</html>