<!DOCTYPE html>
<html lang="pt">
<link rel="stylesheet" href="style/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<style>
    .container{
        border: 1px solid black;
        margin: 20% 40%;
        display: flex;
        position: center;
        background: white;
    }
    li{
        list-style: none;
        margin: 5px;
    }
    h1{
        font-family: 'Orbitron', sans-serif;
        font-size: 20px;
    }

</style>
<head>
    <meta charset="UTF-8">
    <title>Login de Usuario</title>
</head>
<body>
    <div class="container">
        <form action="services/login.php" method="POST">
            <div class="buttons">
                <ul id="log">
                    <li><h1>Bem vindo ao Empréstimo do Jhony</h1></li>
                    <li><input type="text" name="usuario" placeholder="Usuário"></li>
                    <li><input type="password" name="senha" placeholder="Senha"></li>
                </ul>
                <ul id="botoes">
                    <li><input name="botao" type="submit" value="Entrar"> <a href="Cadastro.php"><input type="button" value="Cadastrar"></a></li>
                </ul>
            </div>
        </form>
    </div>
    <footer>
        <p>Criado por João André Bueno - 2021</p>
    </footer>
</body>
</html>