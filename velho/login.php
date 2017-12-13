<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'login', time() + 3600);
    }

    if (!empty($_GET)) {
        if (isset($_GET['signin'])) {
            $return = 'success';

            //consulta base de dados com username e password

            if ($return == 'success') {
                session_destroy(); // Destrói toda sessão
                session_start();
                $_SESSION['usuario'] = 'teste'; // Melhor o nome registrado
            }
        }

        if (isset($_POST['signout'])) {
            session_destroy(); // Destrói toda sessão
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="get">
            <div class="form-group">
                <label for="username">Nome de usuário:</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="pwd">Senha:</label>
                <input type="password" class="form-control" id="password">
            </div>
            <br/><button type="submit" name="signin" class="btn btn-default">Entrar</button>
        </form>
    </div>
</body>
</html>