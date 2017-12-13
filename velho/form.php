<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
    	unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'form', time() + 3600);
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
	<title>Cadastro</title>
</head>
<body>
	<div class="container">
		<h2>Formulário de cadastro</h2>
		<form action="grava.php" method="get">
			<div class="form-group">
				<label for="username">Nome de usuário:</label>
				<input type="text" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Senha:</label>
				<input type="password" class="form-control" id="password">
			</div>
			<div class="form-group">
				<label for="pwd">Confirmar Senha:</label>
				<input type="password" class="form-control" id="confirm_password">
			</div>
			<div class="form-group">
				<label for="comment">Assuntos de interesse:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
			<legend>Gênero:</legend>
			<div class="radio" id="mark">
				<label><input type="radio" name="optradio" checked="checked">Masculino</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio">Feminino</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio">Outro</label>
			</div>
			<label for="sel1">Selecione o curso:</label>
			<select class="form-control" id="select">
				<option>ADS</option>
				<option>PQ</option>
				<option>GE</option>
				<option>COMEX</option>
			</select>
			<br/><button type="submit" class="btn btn-default">Gravar</button>
		</form>
	</div>
</body>
</html>