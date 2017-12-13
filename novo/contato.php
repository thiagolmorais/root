<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'contato', time() + 3600);
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.738240881763!2d-46.41452468501063!3d-24.005018784010424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1db2e586da8d%3A0x271ae3e10bdc671e!2sFATEC!5e0!3m2!1spt-BR!2sbr!4v1512074849562" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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