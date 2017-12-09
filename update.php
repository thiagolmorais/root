<?php
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:index.php");
	// ver comentário em index.php sobre mysqli_connect
	$con = @ mysqli_connect("localhost","root","usbw","escola");
  if ($con == null ) {
    // Se conexão null, houve erro
    die("Falha ao conectar");	
  } else {
    // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
    $ps = mysqli_prepare($con,"UPDATE ALUNO SET nome=?, cpf=?, nascimento=?, email=?, genero=?, observacao=?, curso=? where id=?");
    mysqli_stmt_bind_param($ps,"sssssssi",$_POST['nome'],$_POST['cpf'],$_POST['nascimento'],$_POST['email'],$_POST['genero'],$_POST['observacao'],$_POST['curso'],$_POST['id']);
    mysqli_stmt_execute($ps);
  }
?>