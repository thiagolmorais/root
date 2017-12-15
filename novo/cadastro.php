<?php
    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'cadastro', time() + 3600);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

<br/>
<br/>
<br/>

  <div class="container">
    <h2>Formulário de cadastro</h2>
    <form action="store.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" pattern="\d{11}" name="cpf">
      </div>
       <div class="form-group">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email">
      </div>

      <div class="form-group">
        <label for="user">username:</label>
        <input type="text" class="form-control" id="user" name="user">
      </div>

      <div class="form-group">
        <label for="pwd">Senha:</label>
        <input type="password" class="form-control" id="pwd" name="pwd">
      </div>

      <div class="form-group">
        <label for="repwd">Repita a Senha:</label>
        <input type="password" class="form-control" id="repwd" name="repwd">
      </div>

      <legend>Gênero:</legend>
      <div class="radio" id="mark">
        <label><input type="radio" name="genero" checked="checked" value='Masculino'>Masculino</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="genero" value='Feminino'>Feminino</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="genero" value='Outro'>Outro</label>
      </div>
      <label for="sel1">Selecione o curso:</label>
      <select name='curso' class="form-control" id="select">
        <option value='Python'>Python</option>
        <option value='Ruby'>Ruby</option>
        <option value='PHP'>PHP</option>
      </select>
       <div class="form-group">
      <legend>Endereço</legend>
        <textarea class="form-control" rows="5" id="endereco" name="endereco"></textarea>
      </div>
      <br/><button type="submit" class="btn btn-default">Gravar</button>
    </form>
  </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
<?php
include('header.php');
include('footer.php');
?>
