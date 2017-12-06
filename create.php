<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Story Teller</title>
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

<div class="controls">
    <form action="store.php" method="post">
     <input class="span5" placeholder="RA" type="number" name="id" min="1"/>
     <input class="input-block-level" placeholder="Nome completo" type="text" name="nome" maxlength="50" pattern="[A-Za-z ]+" required/>
     <input class="input-block-level" placeholder="CPF" type="text" name="cpf" maxlength="11" pattern="[0-9]"/>
     <input class="input-block-level" placeholder="Nascimento" type="date" name="nascimento"/>
     <input class="input-block-level" placeholder="Email" type="email" name="email" maxlength="100"/>
     <input class="input-block-level" placeholder="Genero" type="text" name="genero" maxlength="100" pattern="[A-Za-z ]+"/>
     <input class="input-block-level" placeholder="Observação" type="text" name="observacao" maxlength="100" pattern="[A-Za-z ]+"/>
     <input class="input-block-level" placeholder="Curso" type="text" name="curso" maxlength="100" pattern="[A-Za-z ]+"/>
     <input class="btn btn-success" type="submit" value="Enviar"/>
     <input class="btn btn-danger" type="reset" value="Limpar"/>
   </form>
</div>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.js"></script>
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