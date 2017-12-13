<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

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
    <input type="hidden" name="codigo" value="<?= $_GET['cd_aluno'] ?> "/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

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
    <script src="js/include.js"></script>

</body></html>

<?php
include('header.php');
include('footer.php');
//Para executar este aplicativo, criar no Mysql banco de dados "escola" e a tabela "aluno" por meio do comando: create table aluno (id int not null primary key, nome varchar(100) not null, endereco varchar(100) not null)
// mysqli_connect abre conexão com Mysql. Há quatro parâmetros: servidor, usuário, senha, banco
$con = @ mysqli_connect("localhost","root","usbw","escola");
if ($con == null ) {
  // Se conexão null, houve erro
  die("Falha ao conectar"); 
} else {
  echo "<a href='create.php'>Criar</a><br/><br/>";
  // mysqli_query envia para o Mysql o texto de um comando SQL. No caso de Select, retorna a tabela resultante.
  $tab = mysqli_query($con,"select cd_aluno, nm_aluno, nm_curso from aluno");
  // Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
  while ($lin = mysqli_fetch_assoc($tab)) {
    echo $lin['nm_aluno']." - ".$lin['nm_curso']." <a href='edit.php?cd_aluno=".$lin['cd_aluno']."'>Editar</a> <a href='delete.php?id=".$lin['cd_aluno']."'>Excluir</a><br/>";
  }
}
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//header("location:register.php");
//*$link = mysqli_connect("localhost", "root", "usbw", "tp2");
 
// Check connection
//*if($link === false){
//*    die("ERROR: Could not connect. " . mysqli_connect_error());
//*}
 
// Escape user inputs for security
//*$u = mysqli_real_escape_string($link, $_REQUEST['username']);
//*$e = mysqli_real_escape_string($link, $_REQUEST['email']);
//*$p = mysqli_real_escape_string($link, $_REQUEST['password']);
//*$cp = mysqli_real_escape_string($link, $_REQUEST['confirm_password']);

//*$sql = "INSERT INTO cadastro (usuario, email, senha, confirmar_senha) VALUES ('$u', '$e', '$p', '$cp')";
//*if(mysqli_query($link, $sql)){
//*    echo '<script type="text/javascript">alert("Cadastro efetuado com sucesso! Agora faça seu login com seu usuário e senha.");</script>';
//*} else{
//*    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//*}
 
// close connection
//*mysqli_close($link);
?>