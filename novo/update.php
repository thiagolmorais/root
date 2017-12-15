<?php
include 'conecta.php';
 //Para executar este aplicativo, criar no Mysql banco de dados "escola" e a tabela "aluno" por meio do comando: create table aluno (id int not null primary key, nome varchar(100) not null, endereco varchar(100) not null)
        // mysqli_connect abre conexão com Mysql. Há quatro parâmetros: servidor, usuário, senha, banco
   $con = conecta();
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
  // ver comentário em index.php sobre mysqli_connect
  if ($con == null ) {
    // Se conexão null, houve erro
    die("Falha ao conectar");
  } else {
    // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
    $ps = mysqli_prepare($con,"UPDATE aluno SET nm_aluno=?,dt_nascimento=?,nm_usuario=?,ds_endereco=? where cd_aluno='{$_POST['cd_aluno']}'");
    mysqli_stmt_bind_param($ps,"ssss",$_POST['nm_aluno'],$_POST['dt_nascimento'],$_POST['nm_usuario'],$_POST['ds_endereco']);
    mysqli_stmt_execute($ps);
  }
	header("location:relatorio.php");
?>
