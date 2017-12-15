<?php


    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'relatorio', time() + 3600);
    }
?>

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
<br/>
<br/>
<br/>

<div class="container">
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
          $tab = mysqli_query($con,"select cd_aluno, nm_aluno, cd_cpf, dt_nascimento, nm_email, nm_usuario, mn_genero, nm_curso, ds_endereco from aluno");
          // Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.

           /* echo $lin['nm_aluno']." - ".$lin['cd_cpf']." - ".$lin['dt_nascimento']." - ".$lin['nm_email']." - ".$lin['nm_curso']."
            <a href='edit.php?nome=".$lin['nm_aluno']."'>Editar</a> <a href='delete.php?nome=".$lin['nm_aluno']."'>Excluir</a><br/>";*/


//crie uma variável para receber o código da tabela
    $tabela = '<table class="table table-striped">';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<th>Código</th>'; // colunas do cabeçalho
    $tabela .= '<th>Nome</th>'; // colunas do cabeçalho
    $tabela .= '<th>CPF</th>';
    $tabela .= '<th>Data de Nascimento</th>';
    $tabela .= '<th>Email</th>';
    $tabela .= '<th>User Name</th>';
    $tabela .= '<th>Genero</th>';
    $tabela .= '<th>Curso</th>';
    $tabela .= '<th>Endereço</th>';
    $tabela .= '<th></th>';
    $tabela .= '<th></th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    /*Se você tiver um loop para exibir os dados ele deve ficar aqui*/


while ($lin = mysqli_fetch_assoc($tab)) {
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$lin['cd_aluno'].'</td>'; //coluna numero
    $tabela .= '<td>'.$lin['nm_aluno'].'</td>'; //coluna numero
    $tabela .= '<td>'.$lin['cd_cpf'].'</td>'; // coluna validade
    $tabela .= '<td>'.$lin['dt_nascimento'].'</td>'; //coluna anexo
    $tabela .= '<td>'.$lin['nm_email'].'</td>';//coluna valor numero
    $tabela .= '<td>'.$lin['nm_usuario'].'</td>';//coluna valor numero
    $tabela .= '<td>'.$lin['mn_genero'].'</td>';//coluna valor numero
    $tabela .= '<td>'.$lin['nm_curso'].'</td>'; // coluna data
    $tabela .= '<td>'.$lin['ds_endereco'].'</td>'; // coluna data
    $tabela .= "<td>
                    <a href='edit.php?cd_aluno={$lin['cd_aluno']}'>
                        <button class='btn btn-primary'>Editar</button>
                    </a>
                </td>"; // coluna data
    $tabela .= "<td>
                    <a href='delete.php?cd_aluno={$lin['cd_aluno']}'>
                        <button class='btn btn-danger'>Excluir</button>
                    </a>
                </td>";
    $tabela .= '</tr>'; // fecha linha
    }/*loop deve terminar aqui*/
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela

    echo $tabela; // imprime
        }

  ?>
</table>
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
    <script src="js/include.js"></script>

</body></html>

<?php
include('header.php');
include('footer.php');

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