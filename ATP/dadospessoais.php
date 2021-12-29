<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meus Dados</title>
</head>
<link rel="stylesheet" href="style/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style\index.css">
<style>
    th{
        width: 1px;
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
    <table>
        <?php include 'services/buscadados.php'; ?>
        <caption id="leg"><h2>Dados de Usuario</h2></caption>
        <thead><tr><th>Nome do usuario</th><th>Senha</th><th>E-mail</th><th>Data de Nascimento</th></tr></thead>
        <tbody>
        <?php while ($linhas = mysqli_fetch_assoc($iduser)){
            echo '<tr>';
            foreach ($linhas as $linha){
                echo '<td>';
                echo $linha;
                echo '</td>';}
            echo '</tr>';
        } ?>
        <form action="services/buscadados.php" method="POST">
        <tr>
            <td><input name="nuser" type="text" placeholder="Novo Usuario" ></td>
            <td><input name="nsenha" type="text" placeholder="Nova Senha" ></td>
            <td><input name="nemail" type="text" placeholder="Novo Email" ></td>
            <td><input name="ndata" placeholder="Nova Data de Nascimento" class="textbox-n" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')"></td>
        </tr>
        <tr>
            <td><input name="salvaru" type="submit" value="Salvar Alteraçoes"></td>
            <td><input name="salvars" type="submit" value="Salvar Alteraçoes"></td>
            <td><input name="salvare" type="submit" value="Salvar Alteraçoes"></td>
            <td><input name="salvard" type="submit" value="Salvar Alteraçoes"></td>
        </tr>
        </form>
        </tbody>

    </table>
</header>
</body>
</html>