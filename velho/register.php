<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'register', time() + 3600);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<title>Cadastro</title>
</head>
<body>
	<div class="container">
		<div class="hero-unit">
		<h1 align="center">Novo usuário</h1>
		<hr/>

		<form action="store.php" method="GET">
            <input type="hidden" name="codigo" value=""/>

            <div class="form-group">
                <label for="usr">CPF:</label>
                <input type="number" class="form-control" name="cpf" id="usr" pattern="[0-9]{11}" placeholder="ex: 12345678900" required>
            </div>
            
            <div class="form-group">
                <label for="usr">Nome Completo:</label>
                <input type="text" class="form-control" name="nome" id="fullname" placeholder="ex: Jose Silva" pattern="[A-Za-z ]+" required>
            </div>

            <div class="form-group">
                <label for="usr">Data de Nascimento:</label>
                <input type="date" class="form-control" name="nascimento" id="usr" placeholder="ex: 01/01/2001" required>
            </div>

            <div class="form-group">
                <label for="comment">Endereço:</label>
                <textarea class="form-control" name="endereco" rows="5" id="comment" placeholder="ex: Rua 123, Bairro 456, Ap. 1, Cidade A, Estado B" required></textarea>
            </div>

            <div class="form-group">
                <p>Gênero:</p>
                <div class="radio" checked="checked">
                    <label><input type="radio" name="genero" value="Masculino">Masculino</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="genero" value="Feminino">Feminino</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="genero" value="Outro">Outro</label>
                </div>
            </div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="ex: Jose123@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
			</div>

            <div class="form-group">
                <label for="username">Nome de usuário:</label>
                <input type="text" class="form-control" name="usuario" id="username" placeholder="ex: Jose123" pattern="[A-Za-z0-9]+" required/>
            </div>

			<div class="form-group">
				<label for="pwd">Senha:</label>
				<input type="password" class="form-control" name="senha" id="password" pattern=".{6,}" placeholder="ex: abc123" required/>
			</div>

			<div class="form-group">
				<label for="pwd">Confirmar Senha:</label>
				<input type="password" class="form-control" name="confirmar_senha" id="confirm_password" required/>
			</div>
            
            <div class="form-group">
            <label for="cursos">Selecione o(s) curso(s):</label>
            <select multiple class="form-control" id="cursos" name="curso" required>
                <option>PHP</option>
                <option>Python</option>
                <option>Ruby</option>
            </select>
            </div>

			<br/><button type="submit" class="btn btn-default">Cadastrar</button>
            <button type="reset" class="btn btn-default">Limpar</button>
		</form>
		</div>
	</div>
</body>
</html>

<?php
include('header.php');
include('footer.php');
?>