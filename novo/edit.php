<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        unset($_COOKIE['cookie_sitio']);
        setcookie('cookie_sitio', 'contato', time() + 3600);
    }
?>
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
     $ps = mysqli_prepare($con,"select cd_cpf, nm_aluno, dt_nascimento, ds_endereco, nm_genero, nm_email, nm_senha from aluno where cd_aluno=?");
     mysqli_stmt_bind_param($ps,"i",$_GET['cd_aluno']);
     mysqli_stmt_execute($ps);
     // mysqli_stmt_bind_result associa variáveis às colunas selecionadas no select (nome e endereço, no caso)
     mysqli_stmt_bind_result($ps,$cpf,$nome,$nascimento,$endereco,$genero,$email,$senha);
     // O comando fetch recupera a únida linha resultante do select (no caso foi realizado where pela chave primária) e carrega as respectivas variáveis associadas pelo comando mysqli_stmt_bind_result
     mysqli_stmt_fetch($ps);
     /* No HTML abaixo, <?= $variavel ?> é uma forma resumida para obter o valor da variável.*/
   ?>

   <div class="container">
        <div class="hero-unit">
        <h1 align="center">Atualizar Dados</h1>
        <hr/>

        <form action="update.php" method="GET">
            <input type="hidden" name="codigo" value="<?= $_GET['cd_aluno'] ?>" readonly/>

            <div class="form-group">
                <label for="usr">CPF:</label>
                <input type="number" class="form-control" name="cpf" id="usr" pattern="[0-9]{11}" placeholder="ex: 12345678900" value="<?= $cpf ?>" required>
            </div>
            
            <div class="form-group">
                <label for="usr">Nome Completo:</label>
                <input type="text" class="form-control" name="nome" id="fullname" placeholder="ex: Jose Silva" pattern="[A-Za-z ]+" value="<?= $nome ?>" required>
            </div>

            <div class="form-group">
                <label for="usr">Data de Nascimento:</label>
                <input type="date" class="form-control" name="nascimento" id="usr" placeholder="ex: 01/01/2001" value="<?= $nascimento ?>" required>
            </div>

            <div class="form-group">
                <label for="comment">Endereço:</label>
                <textarea class="form-control" name="endereco" rows="5" id="comment" placeholder="ex: Rua 123, Bairro 456, Ap. 1, Cidade A, Estado B" value="<?= $endereco ?>" required></textarea>
            </div>

            <div class="form-group">
                <p>Gênero:</p>
                <div class="radio">
                    <label><input type="radio" name="genero">Masculino</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="genero">Feminino</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="genero">Outro</label>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="ex: Jose123@gmail.com" name="email" value="<?= $email ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
            </div>

            <div class="form-group">
                <label for="pwd">Senha:</label>
                <input type="password" class="form-control" name="senha" id="password" pattern=".{6,}" placeholder="ex: abc123" required/>
            </div>

            <div class="form-group">
                <label for="pwd">Confirmar Senha:</label>
                <input type="password" class="form-control" name="confirmar_senha" id="confirm_password" required/>
            </div>

            <br/><button type="submit" class="btn btn-default">Atualizar</button>
            <button type="reset" class="btn btn-default">Limpar</button>
        </form>
        </div>
    </div>
</body>
</html>