<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        if (isset($_COOKIE['cookie_sitio'])) {
            $LOCAL = $_COOKIE['cookie_sitio'];
            unset($_COOKIE['cookie_sitio']);
            header('Location: '.$LOCAL.'.php');
        }
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'index', time() + 3600);
    }

?>
<!DOCTYPE html>
<html lang="en">
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

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Venha para Story Teller.</h1>
              <p class="lead">Deixe de contar história. Na Story Teller você vai ser um programador de verdade com todos os atributos de um excelente profissional.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>                
      </div>
    </div><!-- /.carousel -->



    <!-- Marketing messaSobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHP.Sobre o PHPging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="img/denis.jpg">
          <h2>Denis Olmedo</h2>
          <p>Especialista em PHP e contador de história</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="img/henrique.jpg">
          <h2>Henrique Hornos</h2>
          <p>Especialista em Python.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="img/thiago.jpg">
          <h2>Thiago Morais</h2>
          <p>Especialista em Ruby.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="img/php.png">
        <h2 class="featurette-heading">PHP.<span class="muted">Seja rápido.</span></h2>
        <p class="lead">PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="img/python.png">
        <h2 class="featurette-heading">Python. <span class="muted">Seja dinâmico.</span></h2>
        <p class="lead">Python é uma linguagem de programação criada por Guido van Rossum em 1991. Os objetivos do projeto da linguagem eram: produtividade e legibilidade. Em outras palavras, Python é uma linguagem que foi criada para produzir código bom e fácil de manter de maneira rápida.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="img/ruby.png">
        <h2 class="featurette-heading">Ruby. <span class="muted">Seja eficiente.</span></h2>
        <p class="lead">Ruby é uma Linguagem de programação interpretada, com tipagem dinâmica e forte, orientada a objetos e, com várias semelhanças com Perl, Python e SmallTalk. Ruby é uma Linguagem de programação interpretada, com tipagem dinâmica e forte, orientada a objetos e, com várias semelhanças com Perl, Python e SmallTalk.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->

    </div><!-- /.container -->



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
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
<?php
include('header.php');
include('footer.php');
?>
