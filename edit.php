<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
   <?php
     // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
     $con = @ mysqli_connect("localhost","root","usbw","escola");
     $ps = mysqli_prepare($con,"select id, nome, cpf, nascimento, email, genero, observacao, curso from aluno where id=?");
     mysqli_stmt_bind_param($ps,"i",$_GET['id']);
     mysqli_stmt_execute($ps);
     // mysqli_stmt_bind_result associa variáveis às colunas selecionadas no select (nome e endereço, no caso)
     mysqli_stmt_bind_result($ps,$id,$nome,$cpf,$nascimento,$email,$genero,$observacao,$curso);
     // O comando fetch recupera a únida linha resultante do select (no caso foi realizado where pela chave primária) e carrega as respectivas variáveis associadas pelo comando mysqli_stmt_bind_result
     mysqli_stmt_fetch($ps);
     /* No HTML abaixo, <?= $variavel ?> é uma forma resumida para obter o valor da variável.*/
   ?>
   <form action="update.php" method="post">
    <label>RA<input type="number" name="id" min="1" value="<?= $_GET['id'] ?>" /></label><br/>
     <label>Nome<input type="text" name="nome" maxlength="100" pattern="[A-Za-z ]+" value="<?= $nome ?>"/></label><br/>
     <label>CPF<input type="text" name="cpf" maxlength="100" pattern="[A-Za-z ]+" value="<?= $cpf ?>"/></label><br/>
     <label>Nascimento<input type="text" name="nascimento" maxlength="100" pattern="[A-Za-z ]+" value="<?= $nascimento ?>"/></label><br/>
     <label>Email<input type="text" name="email" maxlength="100" pattern="[A-Za-z ]+" value="<?= $email ?>"/></label><br/>
     <label>Genero<input type="text" name="genero" maxlength="100" pattern="[A-Za-z ]+" value="<?= $genero ?>"/></label><br/>
     <label>Observacao<input type="text" name="observacao" maxlength="100" pattern="[A-Za-z ]+" value="<?= $observacao ?>"/></label><br/>
     <label>Curso<input type="text" name="curso" maxlength="100" pattern="[A-Za-z ]+" value="<?= $curso ?>"/></label><br/>
     <input type="submit" value="Enviar"/>
     <input type="reset" value="Limpar"/>
   </form>
</body>
</html>