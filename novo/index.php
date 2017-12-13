<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
    } else {
      unset($_COOKIE['cookie_sitio']);
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
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Venha para Story Teller.</h1>
        <p>Deixe de contar história. Na Story Teller você vai ser um programador de verdade com todos os atributos de um excelente profissional.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">

        <div class="span4">
          <img class="liguagens" src="img/ruby.png">
        </div><!-- /.span4 -->

        <div class="span4">
          <img class="liguagens" src="img/php.png">
        </div><!-- /.span4 -->

        <div class="span4">
          <img class="liguagens" src="img/python.png">
        </div><!-- /.span4 -->


        <div class="span4">
          <h2>Ruby</h2>
          <p class="desc_linguagens">Ruby é uma Linguagem de programação interpretada, com tipagem dinâmica e forte, orientada a objetos e, com várias semelhanças com Perl, Python e SmallTalk. Ruby é uma Linguagem de programação interpretada, com tipagem dinâmica e forte, orientada a objetos e, com várias semelhanças com Perl, Python e SmallTalk.</p>
        </div>

        <div class="span4">
          <h2>PHP</h2>
          <p class="desc_linguagens">PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.</p>
        </div>

        <div class="span4">
          <h2>Python</h2>
          <p class="desc_linguagens">Python é uma linguagem de programação criada por Guido van Rossum em 1991. Os objetivos do projeto da linguagem eram: produtividade e legibilidade. Em outras palavras, Python é uma linguagem que foi criada para produzir código bom e fácil de manter de maneira rápida.</p>
        </div>


      </div>

      <hr>


    </div> <!-- /container -->

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
