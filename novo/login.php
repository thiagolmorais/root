<?php
  session_start();
  $email = 0;
  $senha = 0;
  $error = 0;

  if(isset($_GET['destroi'])) {
    session_destroy();
  } else {
    if (isset($_POST['email'])) {
      $email = $_POST['email'];
    } else {
      $error = "1Login nao encontrado";
    }

    if (isset($_POST['pwd'])) {
      $senha = $_POST['pwd'];
    } else {
      $error = "2Login nao encontrado";
    }

    if ($error == 0){
      include 'conecta.php';
      $con = conecta();
      if ($con == null ) {
        die("3Falha ao conectar");
      } else {
        $tab = mysqli_query($con,"SELECT nm_usuario,nm_senha FROM aluno WHERE nm_email='{$email}'");
        if ($tab == null) {
          echo("4Login nao encontrado");
        } else {
          $lin = mysqli_fetch_assoc($tab);
          if (password_verify($senha, $lin['nm_senha'])) {
            session_start();
            $_SESSION['usuario'] = $lin['nm_usuario'];
          } else {
            if (isset($_SESSION))
              session_destroy();
            echo("5Login incorreto, verifique login e senha");
          }
        }
      }
    } else {
      echo "{$error}";
    }
  }
  header("Location: index.php");
?>