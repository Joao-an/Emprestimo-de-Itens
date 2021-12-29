<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<link rel="stylesheet" href="style/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<style>
    li {
        list-style: none;
        margin: 5px;
    }

    .cadastro {
        display: flex;
        position: center;
        width: 22%;
        margin: 10% 40%;
        border: 1px solid black;
    }

    .cadastro {
        background: lightgray;
    }

    h1 {
        font-family: 'Orbitron', sans-serif;
        font-size: 20px;
    }

    input{
        text-align: center;
    }
</style>
<body>

<div class="container">
    <div class="cadastro">
        <form method="POST" action="./services/cadastro.php">
            <ul>
                <li><h1>Bem vindo ao Empréstimo do Jhony</h1></li>
                <li><input placeholder="Nome de Usúario" name="user" type="text" size="21" maxlength="50"></li>
                <li><input placeholder="e-mail" name="email" type="email" size="21" maxlength="50"></li>
                <li><input placeholder="Data de Nascimento" type="text" onfocus="(this.type='date')"
                           onfocusout="(this.type='text')" name="data" size="21"></li>
                <li><input placeholder="Senha" name="senha" type="password" size="21" maxlength="10"></li>
                <li><a href="/login.php"><input name="cad" id="cadastro" value="Cadastrar" type="submit"></a><a
                        href="/ATP/login.php"><input name="cancel" id="cancelar" value="Cancelar" type="button"></a></li>
            </ul>
        </form>
    </div>
</div>
<footer>
    <p>Criado por João André Bueno - 2021</p>
</footer>
</body>
</html>