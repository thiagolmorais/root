<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Story Teller</title>
</head>
<body>
<header>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Story Teller</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="cadastro.php">Cadastro</a></li>
              <li><a href="relatorio.php">Relatório</a></li>
              <li><a href="contato.php">Contatos</a></li>
            </ul>
            <?php
              if (isset($_SESSION['usuario'])) {
                echo "<div class='pull-right'>
                        <p>
                          Bem vindo {$_SESSION['usuario']}
                          <a href='login.php?destroi=1'> Sair</a>
                        </p>
                        ";
              } else {
                echo "<form class='navbar-form pull-right' action='login.php' method='POST'>
                        <input class='span2' type='text' placeholder='Email' name='email'>
                        <input class='span2' type='password' placeholder='Password' name='pwd'>
                        <button type='submit' class='btn btn-success'>Login</button>
                      </form>";
                //session_destroy();
                unset($_COOKIE['cookie_sitio']);
              }
            ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    </header>
</body>
</html>