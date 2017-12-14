<?php
    $error = 0;
    $perfil = 0;

    include 'conecta.php';
	$con = conecta();
    if ($con == null) {
        // Se conexão null, houve erro
        die("Falha ao conectar");
    } else {

        if(isset($_POST['cpf'])) {
            $cpf=$_POST['cpf'];
        } else {
            $error = 'cpf';
        }

        if(isset($_POST['nome'])) {
            $nome=$_POST['nome'];
        } else {
            $error = 'nome';
        }

        if(isset($_POST['nascimento'])) {
            $nascimento=$_POST['nascimento'];
        } else {
            $error = 'nascimento';
        }

        if(isset($_POST['endereco'])) {
            $endereco=$_POST['endereco'];
        } else {
            $error = 'endereco';
        }

        if(isset($_POST['genero'])) {
            $genero=$_POST['genero'];
        } else {
            $error = 'genero';
        }

        if(isset($_POST['email'])) {
            $email=$_POST['email'];
        } else {
            $error = 'email';
        }

        if(isset($_POST['user'])) {
            $usuario=$_POST['user'];
        } else {
            $error = 'user';
        }

        if(isset($_POST['pwd'])) {
            $password=$_POST['pwd'];
        } else {
            $error = 'pwd';
        }

        if(isset($_POST['repwd'])) {
            $password_confirm=$_POST['repwd'];
        } else {
            $error = 'repwd';
        }

        if(isset($_POST['curso'])) {
            $curso=$_POST['curso'];
        } else {
            $error = 'curso';
        }

        if ($password != $password_confirm) {
            $error = "ERRO DATABASE Senha Invalida";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            echo $hashed_password;
        }

        if ($error) {
            echo "ERRO DATABASE campo {$error}";
        } else {

            //validar CAMPOS

            // Utilizar comandos preparados é uma forma mais segura de se trabalhar com banco de dados. mysqli_prepare envia para o banco de dados o comando a ser processado, mas sem os dados (representados por parâmetros - "?"). O banco de dados compila e prepara o comando para execução.
            $ps = mysqli_prepare($con,"INSERT INTO aluno (cd_cpf,cd_perfil,nm_aluno,dt_nascimento,ds_endereco,mn_genero,nm_email,nm_usuario,nm_senha,nm_curso) VALUES (?,?,?,?,?,?,?,?,?,?)");
            // mysqli_stmt_bind_param associa variáveis (no caso posições do vetor $_POST) aos parâmetros ("?") do comando preparado. O segundo parâmetro ("iss") indica os tipos dos parâmetros, no caso: inteito, string e string.
            mysqli_stmt_bind_param($ps,'sissssssss',$cpf,$perfil,$nome,$nascimento,$endereco,$genero,$email,$usuario,$hashed_password,$curso);
            // mysqli_stmt_execute envia ao banco de dados os valores das variáveis associadas aos parâmetros. O banco de dados executa o comando.
            mysqli_stmt_execute($ps);
        }
    }
?>
