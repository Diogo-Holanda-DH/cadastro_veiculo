<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="caixa_login">
            <h1>Área restrita</h1>
            <form action="fazer_login.php" method="post">
                <input type="text"
                       name="usuario_digitado"
                       placeholder="Digite seu usuário">
                <br><br>
                <input type="password"
                       name="senha_digitada"
                       placeholder="Digite sua senha">
                <br><br>
                <?php
                    echo isset($_GET['erro1'])?"Usuario/senha incorretos":"";
                    echo isset($_GET['erro2'])?"Você desconectou!":"";
                    echo isset($_GET['erro3'])?"Você precisa estar logado!":"";
                ?><br>
                <button type="submit">Entrar</button>
            </form>
    </div>
</body>
</html>