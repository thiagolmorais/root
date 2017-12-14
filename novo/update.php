<?php
include 'conecta.php';
 //Para executar este aplicativo, criar no Mysql banco de dados "escola" e a tabela "aluno" por meio do comando: create table aluno (id int not null primary key, nome varchar(100) not null, endereco varchar(100) not null)
        // mysqli_connect abre conexão com Mysql. Há quatro parâmetros: servidor, usuário, senha, banco
        $con = conecta();
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
  // ver comentário em index.php sobre mysqli_connect
  $con = @ mysqli_connect("localhost","root","usbw","escola");
  if ($con == null ) {
    // Se conexão null, houve erro
    die("Falha ao conectar");
  } else {
    // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
    $ps = mysqli_prepare($con,"UPDATE ALUNO SET cd_cpf=?, nm_aluno=?, dt_nascimento=?, ds_endereco=?, nm_genero=?, nm_email=?, nm_usuario=?, nm_senha=?, nm_curso=? where cd_aluno=?");
    mysqli_stmt_bind_param($ps,"sssssssssi",$_GET['cpf'],$_GET['nome'],$_GET['nascimento'],$_GET['endereco'],$_GET['genero'],$_GET['email'],$_GET['usuario'],$_GET['senha'],$_GET['curso'],$_GET['codigo']);
    mysqli_stmt_execute($ps);
  }
	header("location:index.php");
?>