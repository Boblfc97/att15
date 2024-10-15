<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h4>Login no Sistema</h4>
        <form action="fazer_login.php" method="post">
            <input type="email"
                   name="email_digitado"
                   placeholder="E-MAIL">
            <br><br>
            <input type="password"
                   name="senha_digitada"
                   placeholder="SENHA">
            <br><br>
            <?php
                echo isset($_GET['erro1'])?
                    "<div>Usuário e/ou senha <br> incorretos</div><br><br>"
                    :"";
                echo isset($_GET['erro2'])?
                    "<div>Você precisa estar <br> logado!</div><br><br>"
                    :"";
            ?>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>