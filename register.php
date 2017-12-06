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

		<form action="home.php" method="GET">
			<div class="form-group">
				<label for="username">Nome de usuário:</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="exemplo123" required/>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="exemplo@gmail.com" name="email" required/>
			</div>
			<div class="form-group">
				<label for="pwd">Senha:</label>
				<input type="password" class="form-control" name="password" id="password" required/>
			</div>
			<div class="form-group">
				<label for="pwd">Confirmar Senha:</label>
				<input type="password" class="form-control" name="confirm_password" id="confirm_password" required/>
			</div>
			<br/><button type="submit" class="btn btn-default">Gravar</button>
		</form>
		</div>
	</div>
</body>
</html>

<?php
include('header.php');
include('footer.php');
?>