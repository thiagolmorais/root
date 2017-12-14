<?php
include('header.php');

    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'edit', time() + 3600);
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
<?php
        include 'conecta.php';
 //Para executar este aplicativo, criar no Mysql banco de dados "escola" e a tabela "aluno" por meio do comando: create table aluno (id int not null primary key, nome varchar(100) not null, endereco varchar(100) not null)
        // mysqli_connect abre conexão com Mysql. Há quatro parâmetros: servidor, usuário, senha, banco
        $con = conecta();
        if ($con == null ) {
          // Se conexão null, houve erro
          die("Falha ao conectar");
        } else {

          // mysqli_query envia para o Mysql o texto de um comando SQL. No caso de Select, retorna a tabela resultante.
          $tab = mysqli_query($con,"SELECT nm_aluno, cd_cpf, dt_nascimento, nm_email, nm_usuario, mn_genero,nm_curso, ds_endereco FROM aluno WHERE cd_aluno='{$_GET['cd_aluno']}'");
          // Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.

          $lin = mysqli_fetch_assoc($tab);
           /* echo $lin['nm_aluno']." - ".$lin['cd_cpf']." - ".$lin['dt_nascimento']." - ".$lin['nm_email']." - ".$lin['nm_curso']."
            <a href='edit.php?nome=".$lin['nm_aluno']."'>Editar</a> <a href='delete.php?nome=".$lin['nm_aluno']."'>Excluir</a><br/>";*/
        }
?>
  <div class="container">
    <h2>Formulário de cadastro</h2>
    <form action="update.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?=$lin['nm_aluno']?>">
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" pattern="\d{11}" name="cpf" value="<?=$lin['cd_cpf']?>">
      </div>
       <div class="form-group">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?=$lin['dt_nascimento']?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email" value="<?=$lin['nm_email']?>">
      </div>

      <div class="form-group">
        <label for="user">username:</label>
        <input type="text" class="form-control" id="user" name="user" value="<?=$lin['nm_usuario']?>">
      </div>


      <div class="form-group">
      <label for="user">Endereço:</label>
        <input type="text" class="form-control" id="user" name="user" value="<?=$lin['ds_endereco']?>">
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
include('footer.php');
?>